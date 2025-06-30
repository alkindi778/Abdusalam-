@extends('layouts.app')

@section('title', 'التحول الرقمي - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('description', 'تعرف على مبادرات التحول الرقمي في الهيئة العامة للأراضي والمساحة والتخطيط العمراني، بما في ذلك السجل العقاري الآلي ونظام GIS والأرشفة الإلكترونية.')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-to-l from-blue-600 to-primary-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">التحول الرقمي</h1>
        <p class="text-xl text-blue-100">نحو مستقبل رقمي متطور في خدمات الأراضي والمساحة والتخطيط العمراني</p>
    </div>
</section>

<!-- Digital Vision -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-8">رؤيتنا الرقمية</h2>
            <div class="bg-gradient-to-r from-blue-50 to-primary-50 rounded-lg p-8">
                <p class="text-lg text-gray-700 leading-relaxed mb-6">
                    تسعى الهيئة العامة للأراضي والمساحة والتخطيط العمراني إلى تحقيق التحول الرقمي الشامل في جميع خدماتها وعملياتها، 
                    بهدف تحسين جودة الخدمات المقدمة للمواطنين وزيادة الكفاءة والشفافية.
                </p>
                <p class="text-lg text-gray-700 leading-relaxed">
                    نهدف إلى أن نكون نموذجاً رائداً في استخدام التكنولوجيا الحديثة لخدمة المجتمع وتحقيق التنمية المستدامة.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Digital Systems -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-4">الأنظمة الرقمية</h2>
            <p class="text-xl text-gray-600">أنظمة متطورة لخدمة أفضل وأسرع</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- System 1: Electronic Real Estate Registry -->
            <div class="gov-card overflow-hidden">
                <div class="bg-gradient-to-r from-green-600 to-green-700 text-white p-6">
                    <div class="text-4xl mb-3">📋</div>
                    <h3 class="text-xl font-bold">السجل العقاري الآلي</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        نظام شامل لإدارة السجل العقاري إلكترونياً مع إمكانية الوصول السريع والآمن للمعلومات العقارية.
                    </p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تسجيل إلكتروني للملكيات</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>بحث متقدم في قاعدة البيانات</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>إصدار فوري للوثائق</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>أمان عالي للبيانات</span>
                        </div>
                    </div>
                    
                    <div class="bg-green-50 p-3 rounded-lg">
                        <p class="text-green-800 text-sm font-medium">الحالة: متاح ومفعل</p>
                    </div>
                </div>
            </div>

            <!-- System 2: GIS System -->
            <div class="gov-card overflow-hidden">
                <div class="bg-gradient-to-r from-blue-600 to-blue-700 text-white p-6">
                    <div class="text-4xl mb-3">🗺️</div>
                    <h3 class="text-xl font-bold">نظام المعلومات الجغرافية GIS</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        نظام متقدم لإدارة البيانات الجغرافية والخرائط الرقمية مع إمكانيات تحليل مكاني شامل.
                    </p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-blue-600 ml-2">✅</span>
                            <span>خرائط رقمية تفاعلية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-blue-600 ml-2">✅</span>
                            <span>تحليل مكاني متقدم</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-blue-600 ml-2">✅</span>
                            <span>ربط البيانات الجغرافية والعقارية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-blue-600 ml-2">✅</span>
                            <span>تخطيط عمراني ذكي</span>
                        </div>
                    </div>
                    
                    <div class="bg-blue-50 p-3 rounded-lg">
                        <p class="text-blue-800 text-sm font-medium">الحالة: قيد التطوير</p>
                    </div>
                </div>
            </div>

            <!-- System 3: Electronic Archiving -->
            <div class="gov-card overflow-hidden">
                <div class="bg-gradient-to-r from-purple-600 to-purple-700 text-white p-6">
                    <div class="text-4xl mb-3">📚</div>
                    <h3 class="text-xl font-bold">الأرشفة الإلكترونية</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        نظام شامل لأرشفة جميع الوثائق والمعاملات إلكترونياً مع إمكانية الوصول السريع والآمن.
                    </p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-purple-600 ml-2">✅</span>
                            <span>أرشفة رقمية شاملة</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-purple-600 ml-2">✅</span>
                            <span>بحث ذكي في الوثائق</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-purple-600 ml-2">✅</span>
                            <span>نسخ احتياطية آمنة</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-purple-600 ml-2">✅</span>
                            <span>وصول محكوم بالصلاحيات</span>
                        </div>
                    </div>
                    
                    <div class="bg-purple-50 p-3 rounded-lg">
                        <p class="text-purple-800 text-sm font-medium">الحالة: متاح جزئياً</p>
                    </div>
                </div>
            </div>

            <!-- System 4: Building Permits System -->
            <div class="gov-card overflow-hidden">
                <div class="bg-gradient-to-r from-orange-600 to-orange-700 text-white p-6">
                    <div class="text-4xl mb-3">🏗️</div>
                    <h3 class="text-xl font-bold">نظام تراخيص البناء الإلكتروني</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        منصة متكاملة لتقديم طلبات تراخيص البناء ومتابعتها إلكترونياً بكفاءة عالية.
                    </p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-orange-600 ml-2">✅</span>
                            <span>تقديم الطلبات إلكترونياً</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-orange-600 ml-2">✅</span>
                            <span>تتبع حالة الطلب</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-orange-600 ml-2">✅</span>
                            <span>دفع إلكتروني للرسوم</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-orange-600 ml-2">✅</span>
                            <span>إشعارات فورية</span>
                        </div>
                    </div>
                    
                    <div class="bg-orange-50 p-3 rounded-lg">
                        <p class="text-orange-800 text-sm font-medium">الحالة: متاح ومفعل</p>
                    </div>
                </div>
            </div>

            <!-- System 5: Mobile App -->
            <div class="gov-card overflow-hidden">
                <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 text-white p-6">
                    <div class="text-4xl mb-3">📱</div>
                    <h3 class="text-xl font-bold">التطبيق الذكي</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        تطبيق ذكي للهواتف المحمولة يوفر جميع خدمات الهيئة في متناول يدك.
                    </p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-indigo-600 ml-2">✅</span>
                            <span>واجهة سهلة الاستخدام</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-indigo-600 ml-2">✅</span>
                            <span>إشعارات فورية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-indigo-600 ml-2">✅</span>
                            <span>متاح لأندرويد و iOS</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-indigo-600 ml-2">✅</span>
                            <span>أمان عالي</span>
                        </div>
                    </div>
                    
                    <div class="bg-indigo-50 p-3 rounded-lg">
                        <p class="text-indigo-800 text-sm font-medium">الحالة: قيد التطوير</p>
                    </div>
                </div>
            </div>

            <!-- System 6: AI Assistant -->
            <div class="gov-card overflow-hidden">
                <div class="bg-gradient-to-r from-teal-600 to-teal-700 text-white p-6">
                    <div class="text-4xl mb-3">🤖</div>
                    <h3 class="text-xl font-bold">المساعد الذكي</h3>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">
                        مساعد ذكي يعمل بالذكاء الاصطناعي لتقديم الدعم والإجابة على الاستفسارات.
                    </p>
                    
                    <div class="space-y-2 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-teal-600 ml-2">✅</span>
                            <span>إجابات فورية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-teal-600 ml-2">✅</span>
                            <span>دعم باللغة العربية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-teal-600 ml-2">✅</span>
                            <span>تعلم مستمر</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-teal-600 ml-2">✅</span>
                            <span>متاح 24/7</span>
                        </div>
                    </div>
                    
                    <div class="bg-teal-50 p-3 rounded-lg">
                        <p class="text-teal-800 text-sm font-medium">الحالة: مخطط للإطلاق</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Benefits -->
<section class="py-16 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">فوائد التحول الرقمي</h2>
            <p class="text-xl text-primary-100">كيف تفيد التكنولوجيا المواطنين والهيئة</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="bg-white text-primary-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">⚡</span>
                </div>
                <h3 class="text-lg font-bold mb-2">سرعة الإنجاز</h3>
                <p class="text-primary-100">تقليل مدة المعاملات من أسابيع إلى أيام</p>
            </div>
            
            <div class="text-center">
                <div class="bg-white text-primary-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🎯</span>
                </div>
                <h3 class="text-lg font-bold mb-2">دقة عالية</h3>
                <p class="text-primary-100">تقليل الأخطاء البشرية وضمان الدقة</p>
            </div>
            
            <div class="text-center">
                <div class="bg-white text-primary-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">💰</span>
                </div>
                <h3 class="text-lg font-bold mb-2">توفير التكاليف</h3>
                <p class="text-primary-100">تقليل التكاليف التشغيلية والورقية</p>
            </div>
            
            <div class="text-center">
                <div class="bg-white text-primary-600 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🌱</span>
                </div>
                <h3 class="text-lg font-bold mb-2">صديق للبيئة</h3>
                <p class="text-primary-100">تقليل استخدام الورق والحفاظ على البيئة</p>
            </div>
        </div>
    </div>
</section>

<!-- Implementation Timeline -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 text-center mb-12">خارطة طريق التحول الرقمي</h2>
            
            <div class="space-y-8">
                <!-- Phase 1 -->
                <div class="flex items-start">
                    <div class="bg-green-600 text-white w-8 h-8 rounded-full flex items-center justify-center ml-4 mt-1 flex-shrink-0">
                        <span class="text-sm font-bold">✓</span>
                    </div>
                    <div class="gov-card p-6 flex-1">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-primary-600">المرحلة الأولى</h3>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">مكتملة</span>
                        </div>
                        <p class="text-gray-600 mb-3">تطوير الأنظمة الأساسية والبنية التحتية الرقمية</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                            <div class="flex items-center">
                                <span class="text-green-600 ml-2">✅</span>
                                <span>السجل العقاري الآلي</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-green-600 ml-2">✅</span>
                                <span>نظام تراخيص البناء</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phase 2 -->
                <div class="flex items-start">
                    <div class="bg-blue-600 text-white w-8 h-8 rounded-full flex items-center justify-center ml-4 mt-1 flex-shrink-0">
                        <span class="text-sm font-bold">2</span>
                    </div>
                    <div class="gov-card p-6 flex-1">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-primary-600">المرحلة الثانية</h3>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">قيد التنفيذ</span>
                        </div>
                        <p class="text-gray-600 mb-3">تطوير الأنظمة المتقدمة وتحسين التجربة الرقمية</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                            <div class="flex items-center">
                                <span class="text-blue-600 ml-2">🔄</span>
                                <span>نظام GIS المتقدم</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-blue-600 ml-2">🔄</span>
                                <span>التطبيق الذكي</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phase 3 -->
                <div class="flex items-start">
                    <div class="bg-purple-600 text-white w-8 h-8 rounded-full flex items-center justify-center ml-4 mt-1 flex-shrink-0">
                        <span class="text-sm font-bold">3</span>
                    </div>
                    <div class="gov-card p-6 flex-1">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="text-xl font-bold text-primary-600">المرحلة الثالثة</h3>
                            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">مخطط</span>
                        </div>
                        <p class="text-gray-600 mb-3">دمج الذكاء الاصطناعي والتحليلات المتقدمة</p>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2 text-sm">
                            <div class="flex items-center">
                                <span class="text-purple-600 ml-2">📅</span>
                                <span>المساعد الذكي</span>
                            </div>
                            <div class="flex items-center">
                                <span class="text-purple-600 ml-2">📅</span>
                                <span>التحليلات التنبؤية</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-4">إنجازات رقمية</h2>
            <p class="text-xl text-gray-600">أرقام تتحدث عن نجاح التحول الرقمي</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="gov-card p-6 text-center">
                <div class="text-3xl text-primary-600 mb-3">🔢</div>
                <h3 class="text-3xl font-bold text-primary-600 mb-2">85%</h3>
                <p class="text-gray-600">تقليل مدة المعاملات</p>
            </div>
            
            <div class="gov-card p-6 text-center">
                <div class="text-3xl text-primary-600 mb-3">📊</div>
                <h3 class="text-3xl font-bold text-primary-600 mb-2">92%</h3>
                <p class="text-gray-600">رضا المواطنين</p>
            </div>
            
            <div class="gov-card p-6 text-center">
                <div class="text-3xl text-primary-600 mb-3">💾</div>
                <h3 class="text-3xl font-bold text-primary-600 mb-2">1.2M</h3>
                <p class="text-gray-600">سجل رقمي</p>
            </div>
            
            <div class="gov-card p-6 text-center">
                <div class="text-3xl text-primary-600 mb-3">🌍</div>
                <h3 class="text-3xl font-bold text-primary-600 mb-2">75%</h3>
                <p class="text-gray-600">تقليل استخدام الورق</p>
            </div>
        </div>
    </div>
</section>

<!-- Future Vision -->
<section class="py-16 bg-gradient-to-r from-primary-600 to-blue-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8">نحو المستقبل</h2>
        <div class="max-w-3xl mx-auto">
            <p class="text-xl text-primary-100 mb-8">
                نتطلع إلى مستقبل رقمي متطور حيث تكون جميع خدماتنا ذكية ومؤتمتة، 
                مع استخدام أحدث التقنيات لتقديم أفضل تجربة للمواطنين والمستثمرين.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-3xl mb-3">🚀</div>
                    <h3 class="font-bold mb-2">الذكاء الاصطناعي</h3>
                    <p class="text-sm">دمج الذكاء الاصطناعي في جميع العمليات</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-3xl mb-3">🔗</div>
                    <h3 class="font-bold mb-2">البلوك تشين</h3>
                    <p class="text-sm">أمان وشفافية قصوى للمعاملات</p>
                </div>
                <div class="bg-white bg-opacity-20 rounded-lg p-6">
                    <div class="text-3xl mb-3">☁️</div>
                    <h3 class="font-bold mb-2">الحوسبة السحابية</h3>
                    <p class="text-sm">مرونة وقابلية توسع لا محدودة</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection