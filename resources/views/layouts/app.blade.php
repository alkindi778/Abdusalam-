<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'الهيئة العامة للأراضي والمساحة والتخطيط العمراني - الجمهورية اليمنية')</title>
    
    <!-- Meta tags -->
    <meta name="description" content="@yield('description', 'الهيئة العامة للأراضي والمساحة والتخطيط العمراني - الجمهورية اليمنية. خدمات الأراضي والمساحة والتخطيط العمراني.')">
    <meta name="keywords" content="الهيئة العامة للأراضي، المساحة، التخطيط العمراني، اليمن، عدن، تراخيص البناء">
    
    <!-- Open Graph -->
    <meta property="og:title" content="@yield('title', 'الهيئة العامة للأراضي والمساحة والتخطيط العمراني')">
    <meta property="og:description" content="@yield('description', 'الهيئة العامة للأراضي والمساحة والتخطيط العمراني - الجمهورية اليمنية')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&family=Cairo:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    @stack('styles')
</head>
<body class="min-h-screen bg-gray-50 font-['Tajawal']">
    <!-- Government Header -->
    <header class="bg-gradient-to-r from-gov-blue to-blue-800 text-white shadow-lg">
        <!-- Top Bar -->
        <div class="bg-gray-800 py-2">
            <div class="container mx-auto px-4">
                <div class="flex justify-between items-center text-sm">
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <span>📧 info@galsup.gov.ye</span>
                        <span>📞 01252590</span>
                        <span>🆘 الخط الساخن: 8000034</span>
                    </div>
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <a href="#" class="hover:text-blue-300 transition-colors">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="#" class="hover:text-blue-300 transition-colors">
                            <i class="fab fa-telegram"></i>
                        </a>
                        <select class="bg-transparent text-white border border-gray-600 rounded px-2 py-1 text-xs">
                            <option value="ar" class="bg-gray-800">العربية</option>
                            <option value="en" class="bg-gray-800">English</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="container mx-auto px-4 py-4">
            <div class="flex items-center justify-between">
                <!-- Logo and Title -->
                <div class="flex items-center space-x-4 space-x-reverse">
                    <div class="bg-white rounded-full p-3 shadow-lg">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMzAiIGN5PSIzMCIgcj0iMzAiIGZpbGw9IiMwMDJiNWMiLz4KPHBhdGggZD0iTTQ1IDIwSDM1VjE1SDI1VjIwSDE1VjMwSDI1VjM1SDM1VjMwSDQ1VjIwWiIgZmlsbD0id2hpdGUiLz4KPHBhdGggZD0iTTIwIDQwSDQwVjQ1SDIwVjQwWiIgZmlsbD0id2hpdGUiLz4KPC9zdmc+" 
                              alt="شعار الهيئة" class="w-12 h-12">
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold leading-tight">الهيئة العامة للأراضي والمساحة والتخطيط العمراني</h1>
                        <p class="text-blue-200 text-sm">الجمهورية اليمنية - عدن</p>
                    </div>
                </div>
                
                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden bg-white bg-opacity-20 p-2 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- News Ticker -->
        <div class="bg-yellow-400 text-gray-900 py-2 overflow-hidden">
            <div class="container mx-auto px-4">
                <div class="flex items-center">
                    <span class="bg-red-600 text-white px-3 py-1 rounded text-sm font-bold ml-4">🔥 عاجل</span>
                    <div class="news-ticker flex items-center">
                        <span class="whitespace-nowrap">
                            🚀 إطلاق نظام السجل العقاري الإلكتروني الجديد | 
                            📋 بدء استقبال طلبات تراخيص البناء إلكترونياً | 
                            �️ انطلاق مشروع إزالة العشوائيات في محافظة عدن | 
                            💼 تعيين م. سالم العولقي رئيساً جديداً للهيئة 2025
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Navigation -->
    <nav class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <!-- Desktop Menu -->
                <ul class="hidden md:flex items-center space-x-8 space-x-reverse py-4">
                    <li><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">🏠 الرئيسية</a></li>
                    <li><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">ℹ️ عن الهيئة</a></li>
                    <li><a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') ? 'active' : '' }}">🌐 الخدمات الإلكترونية</a></li>
                    <li><a href="{{ route('digital-transformation') }}" class="nav-link {{ request()->routeIs('digital-transformation') ? 'active' : '' }}">🚀 التحول الرقمي</a></li>
                    <li><a href="{{ route('projects') }}" class="nav-link {{ request()->routeIs('projects') ? 'active' : '' }}">📊 المشاريع والأنشطة</a></li>
                    <li><a href="{{ route('leadership') }}" class="nav-link {{ request()->routeIs('leadership') ? 'active' : '' }}">👥 الإدارة والقيادة</a></li>
                    <li><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">📞 اتصل بنا</a></li>
                </ul>
                
                <!-- Mobile Menu -->
                <ul id="mobile-menu" class="md:hidden w-full hidden flex-col py-4 space-y-2">
                    <li><a href="{{ route('home') }}" class="mobile-nav-link">🏠 الرئيسية</a></li>
                    <li><a href="{{ route('about') }}" class="mobile-nav-link">ℹ️ عن الهيئة</a></li>
                    <li><a href="{{ route('services') }}" class="mobile-nav-link">🌐 الخدمات الإلكترونية</a></li>
                    <li><a href="{{ route('digital-transformation') }}" class="mobile-nav-link">🚀 التحول الرقمي</a></li>
                    <li><a href="{{ route('projects') }}" class="mobile-nav-link">📊 المشاريع والأنشطة</a></li>
                    <li><a href="{{ route('leadership') }}" class="mobile-nav-link">👥 الإدارة والقيادة</a></li>
                    <li><a href="{{ route('contact') }}" class="mobile-nav-link">📞 اتصل بنا</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white">
        <!-- Main Footer -->
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Organization Info -->
                <div>
                    <div class="flex items-center space-x-3 space-x-reverse mb-4">
                        <div class="bg-gov-blue rounded-full p-2">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                            </svg>
                        </div>
                        <h3 class="text-lg font-bold">الهيئة العامة للأراضي والمساحة</h3>
                    </div>
                    <p class="text-gray-300 mb-4">
                        هيئة حكومية متخصصة في إدارة الأراضي والمساحة والتخطيط العمراني في الجمهورية اليمنية
                    </p>
                    <div class="text-sm text-gray-400">
                        <p>📍 عدن - الجمهورية اليمنية</p>
                        <p>📧 info@galsup.gov.ye</p>
                        <p>🌐 www.galsup.gov.ye</p>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-bold mb-4 text-gov-blue">🔗 روابط سريعة</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">عن الهيئة</a></li>
                        <li><a href="{{ route('services') }}" class="hover:text-white transition-colors">الخدمات الإلكترونية</a></li>
                        <li><a href="{{ route('digital-transformation') }}" class="hover:text-white transition-colors">التحول الرقمي</a></li>
                        <li><a href="{{ route('contact') }}" class="hover:text-white transition-colors">اتصل بنا</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-bold mb-4 text-gov-blue">🏛️ خدماتنا</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li>📋 تراخيص البناء</li>
                        <li>📝 السجل العقاري</li>
                        <li>🗺️ الخرائط المساحية</li>
                        <li>🏗️ فحص المخططات</li>
                        <li>📞 الشكاوى والاستفسارات</li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-bold mb-4 text-gov-blue">📞 معلومات الاتصال</h3>
                    <div class="space-y-3 text-gray-300">
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <span class="text-gov-blue">📞</span>
                            <span>01252590</span>
                        </div>
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <span class="text-red-400">🆘</span>
                            <span>الخط الساخن: 8000034</span>
                        </div>
                        <div class="flex items-center space-x-3 space-x-reverse">
                            <span class="text-blue-400">📧</span>
                            <span>info@galsup.gov.ye</span>
                        </div>
                        <div class="flex space-x-4 space-x-reverse mt-4">
                            <a href="#" class="text-blue-500 hover:text-blue-400 transition-colors">
                                <i class="fab fa-facebook text-xl"></i>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <i class="fab fa-telegram text-xl"></i>
                            </a>
                            <a href="#" class="text-blue-600 hover:text-blue-500 transition-colors">
                                <i class="fab fa-linkedin text-xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer -->
        <div class="border-t border-gray-800">
            <div class="container mx-auto px-4 py-6">
                <div class="flex flex-col md:flex-row justify-between items-center text-sm text-gray-400">
                    <div class="mb-4 md:mb-0">
                        <p>© 2025 الهيئة العامة للأراضي والمساحة والتخطيط العمراني - جميع الحقوق محفوظة</p>
                        <p class="mt-1">القرار الجمهوري رقم (35) لسنة 2006 | القرار رقم (64) لسنة 2008</p>
                    </div>
                    <div class="flex items-center space-x-4 space-x-reverse">
                        <a href="#" class="hover:text-white transition-colors">سياسة الخصوصية</a>
                        <span>|</span>
                        <a href="#" class="hover:text-white transition-colors">شروط الاستخدام</a>
                        <span>|</span>
                        <a href="#" class="hover:text-white transition-colors">خريطة الموقع</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button').addEventListener('click', function() {
            const mobileMenu = document.getElementById('mobile-menu');
            mobileMenu.classList.toggle('hidden');
            mobileMenu.classList.toggle('flex');
        });
    </script>
    
    @stack('scripts')
</body>
</html>