@extends('layouts.app')

@section('title', 'الرئيسية - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('description', 'الموقع الرسمي للهيئة العامة للأراضي والمساحة والتخطيط العمراني - الجمهورية اليمنية. خدمات متنوعة في مجال الأراضي والمساحة والتخطيط العمراني.')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-gov text-white py-16">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-right">
                <h1 class="text-4xl lg:text-6xl font-bold mb-6 leading-tight">
                    الهيئة العامة للأراضي والمساحة
                    <span class="text-yellow-400">والتخطيط العمراني</span>
                </h1>
                <p class="text-xl mb-8 text-blue-100">
                    نحو تطوير شامل ومستدام للأراضي والمساحة والتخطيط العمراني في الجمهورية اليمنية
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="{{ route('services') }}" class="gov-button">
                        🌐 الخدمات الإلكترونية
                    </a>
                    <a href="{{ route('about') }}" class="gov-button-outline bg-white text-gov-blue border-white hover:bg-blue-50">
                        ℹ️ تعرف على الهيئة
                    </a>
                </div>
            </div>
            <div class="text-center">
                <div class="bg-white bg-opacity-10 rounded-full p-8 inline-block">
                    <svg class="w-32 h-32 text-white mx-auto" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">📊 إحصائيات الهيئة</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Stat 1 -->
            <div class="gov-card text-center">
                <div class="feature-icon">
                    📋
                </div>
                <h3 class="text-2xl font-bold text-gov-blue">25,000+</h3>
                <p class="text-gray-600">تراخيص البناء الصادرة</p>
            </div>
            
            <!-- Stat 2 -->
            <div class="gov-card text-center">
                <div class="feature-icon">
                    �
                </div>
                <h3 class="text-2xl font-bold text-gov-blue">15,000+</h3>
                <p class="text-gray-600">سجلات عقارية مسجلة</p>
            </div>
            
            <!-- Stat 3 -->
            <div class="gov-card text-center">
                <div class="feature-icon">
                    🗺️
                </div>
                <h3 class="text-2xl font-bold text-gov-blue">5,000+</h3>
                <p class="text-gray-600">خريطة مساحية منجزة</p>
            </div>
            
            <!-- Stat 4 -->
            <div class="gov-card text-center">
                <div class="feature-icon">
                    👥
                </div>
                <h3 class="text-2xl font-bold text-gov-blue">1,200+</h3>
                <p class="text-gray-600">موظف متخصص</p>
            </div>
        </div>
    </div>
</section>

<!-- Services Overview -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🏛️ خدماتنا الرئيسية</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="text-center mb-4">
                    <div class="bg-gov-blue text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        📋
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">تراخيص البناء</h3>
                    <p class="text-gray-600 mb-4">إصدار وتجديد تراخيص البناء والتشييد</p>
                    <a href="{{ route('services') }}" class="text-gov-blue hover:text-blue-700 font-medium">
                        اطلب الخدمة ←
                    </a>
                </div>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="text-center mb-4">
                    <div class="bg-gov-blue text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        �
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">السجل العقاري</h3>
                    <p class="text-gray-600 mb-4">تسجيل ونقل ملكية العقارات</p>
                    <a href="{{ route('services') }}" class="text-gov-blue hover:text-blue-700 font-medium">
                        اطلب الخدمة ←
                    </a>
                </div>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card">
                <div class="text-center mb-4">
                    <div class="bg-gov-blue text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        🗺️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">الخرائط المساحية</h3>
                    <p class="text-gray-600 mb-4">إعداد وتحديث الخرائط المساحية</p>
                    <a href="{{ route('services') }}" class="text-gov-blue hover:text-blue-700 font-medium">
                        اطلب الخدمة ←
                    </a>
                </div>
            </div>
            
            <!-- Service 4 -->
            <div class="service-card">
                <div class="text-center mb-4">
                    <div class="bg-gov-blue text-white rounded-full w-16 h-16 flex items-center justify-center text-2xl mx-auto mb-4">
                        🏗️
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">فحص المخططات</h3>
                    <p class="text-gray-600 mb-4">مراجعة واعتماد المخططات الهندسية</p>
                    <a href="{{ route('services') }}" class="text-gov-blue hover:text-blue-700 font-medium">
                        اطلب الخدمة ←
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Access -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">⚡ الوصول السريع</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Quick Access 1 -->
            <div class="gov-card text-center hover:shadow-gov-lg transition-all">
                <div class="mb-6">
                    <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto">
                        🔍
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">استعلام عن طلب</h3>
                <p class="text-gray-600 mb-6">تتبع حالة طلبك المقدم للهيئة</p>
                <button class="gov-button w-full">استعلم الآن</button>
            </div>
            
            <!-- Quick Access 2 -->
            <div class="gov-card text-center hover:shadow-gov-lg transition-all">
                <div class="mb-6">
                    <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto">
                        �
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">طلب جديد</h3>
                <p class="text-gray-600 mb-6">قدم طلباً جديداً للحصول على خدماتنا</p>
                <button class="gov-button w-full">ابدأ طلبك</button>
            </div>
            
            <!-- Quick Access 3 -->
            <div class="gov-card text-center hover:shadow-gov-lg transition-all">
                <div class="mb-6">
                    <div class="bg-yellow-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto">
                        📞
                    </div>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-4">تقديم شكوى</h3>
                <p class="text-gray-600 mb-6">أبلغ عن مشكلة أو قدم اقتراحاً</p>
                <button class="gov-button w-full">قدم شكوى</button>
            </div>
        </div>
    </div>
</section>

<!-- Leadership Section -->
<section class="py-16 bg-gradient-light">
    <div class="container mx-auto px-4">
        <h2 class="section-title">👔 قيادة الهيئة</h2>
        <div class="max-w-4xl mx-auto">
            <div class="gov-card">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8 items-center">
                    <div class="text-center">
                        <div class="bg-gov-blue rounded-full w-32 h-32 flex items-center justify-center text-4xl text-white mx-auto mb-4">
                            👨‍💼
                        </div>
                        <h3 class="text-xl font-bold text-gray-900">م. سالم العولقي</h3>
                        <p class="text-gov-blue font-medium">رئيس الهيئة</p>
                        <p class="text-gray-600 text-sm">معين حديثاً - 2025</p>
                    </div>
                    <div class="lg:col-span-2">
                        <h4 class="text-lg font-bold text-gray-900 mb-4">رسالة الرئيس</h4>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            "نتطلع إلى تطوير عمل الهيئة وتحسين خدماتها المقدمة للمواطنين، من خلال تفعيل التحول الرقمي وتطبيق أحدث التقنيات في مجال إدارة الأراضي والمساحة والتخطيط العمراني."
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            "نعمل على ضمان الشفافية والجودة في جميع خدماتنا، وتسهيل الإجراءات على المواطنين والمستثمرين لتحقيق التنمية المستدامة."
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Latest News -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">📰 آخر الأخبار والأنشطة</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- News 1 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">🔥 عاجل</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">إطلاق نظام السجل العقاري الإلكتروني</h3>
                <p class="text-gray-600 mb-4">تم إطلاق النظام الجديد لتسهيل عمليات التسجيل العقاري وتسريع الإجراءات</p>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>📅 15 يناير 2025</span>
                    <a href="#" class="text-gov-blue hover:text-blue-700">اقرأ المزيد ←</a>
                </div>
            </div>
            
            <!-- News 2 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">📋 خدمات</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">بدء استقبال طلبات تراخيص البناء إلكترونياً</h3>
                <p class="text-gray-600 mb-4">يمكن الآن تقديم طلبات تراخيص البناء عبر الموقع الإلكتروني</p>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>📅 12 يناير 2025</span>
                    <a href="#" class="text-gov-blue hover:text-blue-700">اقرأ المزيد ←</a>
                </div>
            </div>
            
            <!-- News 3 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">🏗️ مشاريع</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">انطلاق مشروع إزالة العشوائيات</h3>
                <p class="text-gray-600 mb-4">بدء تنفيذ مشروع شامل لإزالة المناطق العشوائية في عدن</p>
                <div class="flex justify-between items-center text-sm text-gray-500">
                    <span>📅 10 يناير 2025</span>
                    <a href="#" class="text-gov-blue hover:text-blue-700">اقرأ المزيد ←</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gov-blue text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-6">هل تحتاج مساعدة؟</h2>
        <p class="text-xl mb-8 text-blue-100">فريقنا جاهز لخدمتك وتقديم المساعدة في جميع استفساراتك</p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="bg-white text-gov-blue px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                📞 اتصل بنا
            </a>
            <a href="{{ route('services') }}" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-gov-blue transition-colors">
                🌐 الخدمات الإلكترونية
            </a>
        </div>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-6 text-center">
            <div>
                <div class="text-2xl mb-2">📞</div>
                <p class="font-medium">الهاتف</p>
                <p class="text-blue-200">01252590</p>
            </div>
            <div>
                <div class="text-2xl mb-2">🆘</div>
                <p class="font-medium">الخط الساخن</p>
                <p class="text-blue-200">8000034</p>
            </div>
            <div>
                <div class="text-2xl mb-2">📧</div>
                <p class="font-medium">البريد الإلكتروني</p>
                <p class="text-blue-200">info@galsup.gov.ye</p>
            </div>
        </div>
    </div>
</section>
@endsection