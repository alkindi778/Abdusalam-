# Deployment Guide for GALSUP Website

This guide provides comprehensive instructions for deploying the GALSUP (General Authority for Land and Survey and Urban Planning) website using multiple deployment strategies.

## Overview

The GALSUP website is a Laravel application that includes:
- **Frontend**: Laravel Blade templates with Tailwind CSS
- **Backend**: Laravel 12 with PHP 8.2
- **Database**: MySQL 8.0
- **Cache/Queue**: Redis
- **Assets**: Built with Vite

## Deployment Options

### 1. Docker Deployment (Recommended)

#### Prerequisites
- Docker and Docker Compose installed
- Server with at least 2GB RAM and 20GB storage
- Domain name pointing to your server

#### Quick Start
1. **Clone the repository:**
```bash
git clone [repository-url]
cd galsup-website
```

2. **Copy and configure environment:**
```bash
cp .env.production .env
# Edit .env with your production settings
```

3. **Generate application key:**
```bash
docker run --rm -v $(pwd):/app composer:latest composer install --working-dir=/app
docker run --rm -v $(pwd):/app php:8.2-cli php /app/artisan key:generate
```

4. **Start the application:**
```bash
docker-compose up -d
```

5. **Run initial setup:**
```bash
docker-compose exec app php artisan migrate --force
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache
```

The website will be available at `http://your-domain.com`

### 2. Traditional Server Deployment

#### Prerequisites
- Ubuntu 20.04+ or CentOS 8+
- PHP 8.2+ with extensions: mbstring, xml, bcmath, curl, gd, mysql
- MySQL 8.0+
- Nginx or Apache
- Composer
- Node.js 18+

#### Installation Steps

1. **Install dependencies:**
```bash
# Ubuntu/Debian
sudo apt update
sudo apt install php8.2 php8.2-fpm php8.2-mysql php8.2-mbstring php8.2-xml php8.2-bcmath php8.2-curl php8.2-gd nginx mysql-server redis-server

# Install Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Install Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt-get install -y nodejs
```

2. **Setup the application:**
```bash
cd /var/www
sudo git clone [repository-url] galsup-website
cd galsup-website
sudo chown -R www-data:www-data .
```

3. **Install dependencies:**
```bash
composer install --no-dev --optimize-autoloader
npm install
npm run build
```

4. **Configure environment:**
```bash
cp .env.production .env
php artisan key:generate
php artisan migrate --force
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

5. **Configure Nginx:**
```nginx
server {
    listen 80;
    server_name galsup.gov.ye www.galsup.gov.ye;
    root /var/www/galsup-website/public;

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.ht {
        deny all;
    }
}
```

### 3. Automated Deployment with GitHub Actions

The repository includes a GitHub Actions workflow that automatically:
- Tests the application
- Builds Docker images
- Deploys to your server

#### Setup

1. **Configure GitHub Secrets:**
   - `DOCKER_USERNAME`: Docker Hub username
   - `DOCKER_PASSWORD`: Docker Hub password
   - `SERVER_HOST`: Your server IP/domain
   - `SERVER_USER`: SSH username
   - `SERVER_SSH_KEY`: Private SSH key
   - `SERVER_PORT`: SSH port (default: 22)

2. **Prepare your server:**
```bash
# Install Docker and Docker Compose
curl -fsSL https://get.docker.com -o get-docker.sh
sh get-docker.sh
sudo usermod -aG docker $USER

# Create deployment directory
sudo mkdir -p /var/www/galsup-website
sudo chown $USER:$USER /var/www/galsup-website
```

3. **Copy docker-compose.yml to server:**
```bash
scp galsup-website/docker-compose.yml user@server:/var/www/galsup-website/
```

4. **Push to main branch to trigger deployment**

## Configuration

### Environment Variables

Key environment variables to configure:

```bash
# Application
APP_NAME="GALSUP - الهيئة العامة للأراضي والمساحة والتخطيط العمراني"
APP_ENV=production
APP_DEBUG=false
APP_URL=https://galsup.gov.ye

# Database
DB_CONNECTION=mysql
DB_HOST=db
DB_DATABASE=galsup
DB_USERNAME=galsup_user
DB_PASSWORD=YOUR_SECURE_PASSWORD

# Cache & Sessions
CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis

# Security
SESSION_SECURE_COOKIE=true
SESSION_SAME_SITE=strict
```

### SSL Certificate Setup

For production, configure SSL using Let's Encrypt:

```bash
# Install Certbot
sudo apt install certbot python3-certbot-nginx

# Obtain certificate
sudo certbot --nginx -d galsup.gov.ye -d www.galsup.gov.ye

# Auto-renewal
sudo crontab -e
# Add: 0 12 * * * /usr/bin/certbot renew --quiet
```

## Monitoring and Maintenance

### Health Checks

Monitor these endpoints:
- Application: `https://galsup.gov.ye/`
- Health check: `https://galsup.gov.ye/health` (if implemented)

### Log Management

```bash
# View application logs
docker-compose logs app

# View Nginx logs
docker-compose logs nginx

# Laravel logs location
tail -f storage/logs/laravel.log
```

### Backup Strategy

1. **Database Backup:**
```bash
# Create backup
docker-compose exec db mysqldump -u galsup_user -p galsup > backup_$(date +%Y%m%d_%H%M%S).sql

# Restore backup
docker-compose exec -T db mysql -u galsup_user -p galsup < backup_file.sql
```

2. **File Backup:**
```bash
# Backup uploaded files
tar -czf storage_backup_$(date +%Y%m%d_%H%M%S).tar.gz storage/app/public/
```

### Performance Optimization

1. **Enable OPcache in production**
2. **Configure Redis for caching**
3. **Use CDN for static assets**
4. **Enable Gzip compression**
5. **Optimize images**

## Troubleshooting

### Common Issues

1. **Permission errors:**
```bash
sudo chown -R www-data:www-data storage bootstrap/cache
sudo chmod -R 775 storage bootstrap/cache
```

2. **Composer memory issues:**
```bash
COMPOSER_MEMORY_LIMIT=-1 composer install
```

3. **Node.js build failures:**
```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

4. **Database connection issues:**
- Check database credentials in `.env`
- Ensure MySQL service is running
- Verify network connectivity

### Debug Mode

For debugging issues, temporarily enable debug mode:
```bash
APP_DEBUG=true
LOG_LEVEL=debug
```

**Remember to disable debug mode in production!**

## Security Considerations

1. **Regular Updates:**
   - Keep Laravel and dependencies updated
   - Update server packages regularly
   - Monitor security advisories

2. **Server Security:**
   - Configure firewall (UFW/iptables)
   - Disable root SSH login
   - Use fail2ban for intrusion prevention
   - Regular security audits

3. **Application Security:**
   - Strong passwords for database and admin accounts
   - Regular backup testing
   - HTTPS enforcement
   - CSRF protection enabled
   - SQL injection prevention

## Support

For deployment support or issues:
- **Technical Email**: tech@galsup.gov.ye
- **Phone**: 01252590 ext. 105
- **Documentation**: Check Laravel and Docker documentation
- **Community**: Laravel community forums

## Deployment Checklist

- [ ] Environment variables configured
- [ ] Database created and migrated
- [ ] SSL certificate installed
- [ ] Caching configured
- [ ] Backups automated
- [ ] Monitoring setup
- [ ] Security hardening applied
- [ ] Performance optimization enabled
- [ ] DNS records configured
- [ ] Error pages customized
- [ ] Search engine optimization applied

---

**Last Updated**: January 2025
**Version**: 1.0.0