#!/bin/bash

# GALSUP Website Deployment Script
# This script automates the deployment process for the GALSUP Laravel website

set -e  # Exit on any error

# Colors for output
RED='\033[0;31m'
GREEN='\033[0;32m'
YELLOW='\033[1;33m'
BLUE='\033[0;34m'
NC='\033[0m' # No Color

# Configuration
APP_NAME="GALSUP Website"
PROJECT_DIR="/var/www/galsup-website"
BACKUP_DIR="/var/backups/galsup"
LOG_FILE="/var/log/galsup-deploy.log"

# Functions
log() {
    echo "[$(date '+%Y-%m-%d %H:%M:%S')] $1" | tee -a "$LOG_FILE"
}

print_header() {
    echo -e "${BLUE}================================${NC}"
    echo -e "${BLUE}  $APP_NAME Deployment${NC}"
    echo -e "${BLUE}================================${NC}"
}

print_success() {
    echo -e "${GREEN}✓ $1${NC}"
    log "SUCCESS: $1"
}

print_error() {
    echo -e "${RED}✗ $1${NC}"
    log "ERROR: $1"
}

print_warning() {
    echo -e "${YELLOW}⚠ $1${NC}"
    log "WARNING: $1"
}

print_info() {
    echo -e "${BLUE}ℹ $1${NC}"
    log "INFO: $1"
}

check_requirements() {
    print_info "Checking system requirements..."
    
    # Check if running as root or with sudo
    if [[ $EUID -eq 0 ]]; then
        print_warning "Running as root. Some operations might need user permissions."
    fi
    
    # Check Docker
    if command -v docker &> /dev/null; then
        print_success "Docker is installed"
    else
        print_error "Docker is not installed. Please install Docker first."
        exit 1
    fi
    
    # Check Docker Compose
    if command -v docker-compose &> /dev/null; then
        print_success "Docker Compose is installed"
    else
        print_error "Docker Compose is not installed. Please install Docker Compose first."
        exit 1
    fi
    
    # Check Git
    if command -v git &> /dev/null; then
        print_success "Git is installed"
    else
        print_error "Git is not installed. Please install Git first."
        exit 1
    fi
}

create_backup() {
    print_info "Creating backup..."
    
    # Create backup directory
    mkdir -p "$BACKUP_DIR"
    
    BACKUP_NAME="galsup_backup_$(date +%Y%m%d_%H%M%S)"
    
    # Backup database if running
    if docker-compose ps | grep -q "galsup-db"; then
        print_info "Backing up database..."
        docker-compose exec -T db mysqldump -u galsup_user -p"$DB_PASSWORD" galsup > "$BACKUP_DIR/${BACKUP_NAME}_database.sql"
        print_success "Database backup created"
    fi
    
    # Backup storage files
    if [ -d "storage" ]; then
        print_info "Backing up storage files..."
        tar -czf "$BACKUP_DIR/${BACKUP_NAME}_storage.tar.gz" storage/
        print_success "Storage backup created"
    fi
    
    print_success "Backup completed: $BACKUP_NAME"
}

pull_latest_code() {
    print_info "Pulling latest code from repository..."
    
    # Check if we're in a git repository
    if [ ! -d ".git" ]; then
        print_error "Not in a git repository. Please run this script from the project root."
        exit 1
    fi
    
    # Stash any local changes
    git stash push -m "Auto-stash before deployment $(date)"
    
    # Pull latest changes
    git pull origin main
    
    print_success "Latest code pulled successfully"
}

build_application() {
    print_info "Building application..."
    
    # Build Docker images
    print_info "Building Docker images..."
    docker-compose build --no-cache
    
    print_success "Application built successfully"
}

deploy_application() {
    print_info "Deploying application..."
    
    # Stop existing containers
    print_info "Stopping existing containers..."
    docker-compose down
    
    # Start new containers
    print_info "Starting new containers..."
    docker-compose up -d
    
    # Wait for containers to be ready
    print_info "Waiting for containers to be ready..."
    sleep 30
    
    # Run database migrations
    print_info "Running database migrations..."
    docker-compose exec -T app php artisan migrate --force
    
    # Clear and cache configurations
    print_info "Caching configurations..."
    docker-compose exec -T app php artisan config:cache
    docker-compose exec -T app php artisan route:cache
    docker-compose exec -T app php artisan view:cache
    
    # Set proper permissions
    print_info "Setting proper permissions..."
    docker-compose exec -T app chown -R www-data:www-data storage bootstrap/cache
    docker-compose exec -T app chmod -R 775 storage bootstrap/cache
    
    print_success "Application deployed successfully"
}

verify_deployment() {
    print_info "Verifying deployment..."
    
    # Check if containers are running
    if docker-compose ps | grep -q "Up"; then
        print_success "Containers are running"
    else
        print_error "Some containers are not running"
        docker-compose ps
        return 1
    fi
    
    # Check application health
    sleep 10
    if curl -f -s http://localhost > /dev/null; then
        print_success "Application is responding"
    else
        print_warning "Application might not be fully ready yet"
    fi
    
    print_success "Deployment verification completed"
}

cleanup() {
    print_info "Cleaning up..."
    
    # Remove unused Docker images
    docker image prune -f
    
    # Clean old backups (keep last 5)
    if [ -d "$BACKUP_DIR" ]; then
        cd "$BACKUP_DIR"
        ls -t | tail -n +6 | xargs -r rm
    fi
    
    print_success "Cleanup completed"
}

show_status() {
    print_info "Current deployment status:"
    echo ""
    docker-compose ps
    echo ""
    print_info "Application URL: http://localhost"
    print_info "Logs: docker-compose logs -f"
}

# Main deployment function
deploy() {
    print_header
    
    # Set database password from environment or prompt
    if [ -z "$DB_PASSWORD" ]; then
        read -s -p "Enter database password: " DB_PASSWORD
        echo ""
        export DB_PASSWORD
    fi
    
    check_requirements
    create_backup
    pull_latest_code
    build_application
    deploy_application
    verify_deployment
    cleanup
    show_status
    
    print_success "Deployment completed successfully!"
    print_info "Check the application at: http://localhost"
}

# Command line options
case "${1:-deploy}" in
    "deploy")
        deploy
        ;;
    "backup")
        create_backup
        ;;
    "status")
        show_status
        ;;
    "logs")
        docker-compose logs -f
        ;;
    "restart")
        print_info "Restarting containers..."
        docker-compose restart
        print_success "Containers restarted"
        ;;
    "down")
        print_info "Stopping containers..."
        docker-compose down
        print_success "Containers stopped"
        ;;
    "up")
        print_info "Starting containers..."
        docker-compose up -d
        print_success "Containers started"
        ;;
    "help")
        echo "GALSUP Website Deployment Script"
        echo ""
        echo "Usage: $0 [command]"
        echo ""
        echo "Commands:"
        echo "  deploy    - Full deployment (default)"
        echo "  backup    - Create backup only"
        echo "  status    - Show current status"
        echo "  logs      - Show live logs"
        echo "  restart   - Restart containers"
        echo "  down      - Stop containers"
        echo "  up        - Start containers"
        echo "  help      - Show this help"
        echo ""
        ;;
    *)
        print_error "Unknown command: $1"
        echo "Use '$0 help' for usage information"
        exit 1
        ;;
esac