@extends('layouts.app')

@section('title', 'المشاريع والأنشطة - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-gov text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold mb-6">📊 المشاريع والأنشطة</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                تعرف على أهم المشاريع والأنشطة التي تنفذها الهيئة لتطوير منظومة الأراضي والمساحة والتخطيط العمراني
            </p>
        </div>
    </div>
</section>

<!-- Current Projects -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🚧 المشاريع الجارية</h2>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Project 1 -->
            <div class="gov-card border-r-4 border-green-500">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="bg-green-100 rounded-full p-3 flex-shrink-0">
                        <div class="text-2xl">🏗️</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">مشروع إزالة العشوائيات في عدن</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600">📅 <strong>بداية المشروع:</strong> يناير 2025</p>
                            <p class="text-gray-600">⏳ <strong>المدة المتوقعة:</strong> 18 شهراً</p>
                            <p class="text-gray-600">💰 <strong>الميزانية:</strong> 50 مليون دولار</p>
                            <p class="text-gray-600">🎯 <strong>الهدف:</strong> إزالة 15 منطقة عشوائية وتطويرها</p>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-700">نسبة الإنجاز</span>
                                <span class="text-sm font-medium text-green-600">25%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-green-500 h-2 rounded-full" style="width: 25%"></div>
                            </div>
                        </div>
                        <div class="flex space-x-2 space-x-reverse">
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">نشط</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">أولوية عالية</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="gov-card border-r-4 border-blue-500">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="bg-blue-100 rounded-full p-3 flex-shrink-0">
                        <div class="text-2xl">🗺️</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">تحديث الخرائط المساحية الرقمية</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600">📅 <strong>بداية المشروع:</strong> نوفمبر 2024</p>
                            <p class="text-gray-600">⏳ <strong>المدة المتوقعة:</strong> 24 شهراً</p>
                            <p class="text-gray-600">💰 <strong>الميزانية:</strong> 25 مليون دولار</p>
                            <p class="text-gray-600">🎯 <strong>الهدف:</strong> رقمنة جميع الخرائط المساحية</p>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-700">نسبة الإنجاز</span>
                                <span class="text-sm font-medium text-blue-600">60%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-blue-500 h-2 rounded-full" style="width: 60%"></div>
                            </div>
                        </div>
                        <div class="flex space-x-2 space-x-reverse">
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">نشط</span>
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">متوسط الأولوية</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="gov-card border-r-4 border-purple-500">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="bg-purple-100 rounded-full p-3 flex-shrink-0">
                        <div class="text-2xl">🏙️</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">مخطط التطوير العمراني الشامل لعدن</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600">📅 <strong>بداية المشروع:</strong> سبتمبر 2024</p>
                            <p class="text-gray-600">⏳ <strong>المدة المتوقعة:</strong> 36 شهراً</p>
                            <p class="text-gray-600">💰 <strong>الميزانية:</strong> 100 مليون دولار</p>
                            <p class="text-gray-600">🎯 <strong>الهدف:</strong> تطوير مخطط عمراني شامل ومستدام</p>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-700">نسبة الإنجاز</span>
                                <span class="text-sm font-medium text-purple-600">40%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-purple-500 h-2 rounded-full" style="width: 40%"></div>
                            </div>
                        </div>
                        <div class="flex space-x-2 space-x-reverse">
                            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm">نشط</span>
                            <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm">أولوية قصوى</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Project 4 -->
            <div class="gov-card border-r-4 border-orange-500">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="bg-orange-100 rounded-full p-3 flex-shrink-0">
                        <div class="text-2xl">🏘️</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">مشروع الإسكان الاجتماعي</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600">📅 <strong>بداية المشروع:</strong> مارس 2025</p>
                            <p class="text-gray-600">⏳ <strong>المدة المتوقعة:</strong> 30 شهراً</p>
                            <p class="text-gray-600">💰 <strong>الميزانية:</strong> 75 مليون دولار</p>
                            <p class="text-gray-600">🎯 <strong>الهدف:</strong> بناء 5000 وحدة سكنية اجتماعية</p>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between items-center mb-2">
                                <span class="text-sm font-medium text-gray-700">نسبة الإنجاز</span>
                                <span class="text-sm font-medium text-orange-600">10%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2">
                                <div class="bg-orange-500 h-2 rounded-full" style="width: 10%"></div>
                            </div>
                        </div>
                        <div class="flex space-x-2 space-x-reverse">
                            <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm">قيد التخطيط</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">أولوية عالية</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Completed Projects -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title">✅ المشاريع المكتملة</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Completed Project 1 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✅ مكتمل</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">نظام السجل العقاري الإلكتروني</h3>
                <p class="text-gray-600 mb-4">تم إطلاق النظام الجديد بنجاح لتسهيل عمليات التسجيل العقاري</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>تاريخ الإكمال:</strong> ديسمبر 2024</p>
                    <p>💰 <strong>التكلفة:</strong> 15 مليون دولار</p>
                    <p>📊 <strong>النتائج:</strong> تسريع الإجراءات بنسبة 70%</p>
                </div>
            </div>

            <!-- Completed Project 2 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✅ مكتمل</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">تطوير نظام تراخيص البناء الرقمي</h3>
                <p class="text-gray-600 mb-4">رقمنة كاملة لعمليات إصدار وتجديد تراخيص البناء</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>تاريخ الإكمال:</strong> أكتوبر 2024</p>
                    <p>💰 <strong>التكلفة:</strong> 8 مليون دولار</p>
                    <p>📊 <strong>النتائج:</strong> تقليل الوقت من 30 إلى 7 أيام</p>
                </div>
            </div>

            <!-- Completed Project 3 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">✅ مكتمل</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">مسح شامل للأراضي الحكومية</h3>
                <p class="text-gray-600 mb-4">حصر وتوثيق جميع الأراضي الحكومية في محافظة عدن</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>تاريخ الإكمال:</strong> سبتمبر 2024</p>
                    <p>💰 <strong>التكلفة:</strong> 12 مليون دولار</p>
                    <p>📊 <strong>النتائج:</strong> توثيق 15,000 قطعة أرض</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Upcoming Projects -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">📅 المشاريع المخططة</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Upcoming Project 1 -->
            <div class="gov-card border-r-4 border-yellow-500">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="bg-yellow-100 rounded-full p-3 flex-shrink-0">
                        <div class="text-2xl">🌿</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">مشروع المدن الذكية المستدامة</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600">📅 <strong>البداية المتوقعة:</strong> يوليو 2025</p>
                            <p class="text-gray-600">⏳ <strong>المدة المتوقعة:</strong> 48 شهراً</p>
                            <p class="text-gray-600">💰 <strong>الميزانية المقدرة:</strong> 200 مليون دولار</p>
                            <p class="text-gray-600">🎯 <strong>الهدف:</strong> تطوير 3 مدن ذكية مستدامة</p>
                        </div>
                        <div class="flex space-x-2 space-x-reverse">
                            <span class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm">قيد التخطيط</span>
                            <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm">مستدام</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Project 2 -->
            <div class="gov-card border-r-4 border-indigo-500">
                <div class="flex items-start space-x-4 space-x-reverse">
                    <div class="bg-indigo-100 rounded-full p-3 flex-shrink-0">
                        <div class="text-2xl">📡</div>
                    </div>
                    <div class="flex-1">
                        <h3 class="text-xl font-bold text-gray-900 mb-3">نظام المراقبة بالأقمار الصناعية</h3>
                        <div class="space-y-2 mb-4">
                            <p class="text-gray-600">📅 <strong>البداية المتوقعة:</strong> سبتمبر 2025</p>
                            <p class="text-gray-600">⏳ <strong>المدة المتوقعة:</strong> 18 شهراً</p>
                            <p class="text-gray-600">💰 <strong>الميزانية المقدرة:</strong> 30 مليون دولار</p>
                            <p class="text-gray-600">🎯 <strong>الهدف:</strong> مراقبة التطوير العمراني عبر الأقمار الصناعية</p>
                        </div>
                        <div class="flex space-x-2 space-x-reverse">
                            <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm">قيد الدراسة</span>
                            <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm">تقنية متقدمة</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Activities & Events -->
<section class="py-16 bg-gradient-light">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🎯 الأنشطة والفعاليات</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Activity 1 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-medium">🎓 تدريب</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">ورشة عمل: التخطيط العمراني المستدام</h3>
                <p class="text-gray-600 mb-4">ورشة متخصصة للمخططين العمرانيين حول أحدث ممارسات التخطيط المستدام</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>التاريخ:</strong> 25-27 فبراير 2025</p>
                    <p>📍 <strong>المكان:</strong> مقر الهيئة - عدن</p>
                    <p>👥 <strong>المشاركون:</strong> 50 متخصص</p>
                </div>
            </div>

            <!-- Activity 2 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">🤝 شراكة</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">اتفاقية تعاون مع الجامعات المحلية</h3>
                <p class="text-gray-600 mb-4">توقيع اتفاقيات تعاون لتطوير البحث العلمي في مجال التخطيط العمراني</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>التاريخ:</strong> 15 فبراير 2025</p>
                    <p>📍 <strong>المكان:</strong> جامعة عدن</p>
                    <p>🏛️ <strong>الشركاء:</strong> 3 جامعات محلية</p>
                </div>
            </div>

            <!-- Activity 3 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">🌱 بيئة</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">مؤتمر التنمية العمرانية المستدامة</h3>
                <p class="text-gray-600 mb-4">مؤتمر دولي لمناقشة التحديات والحلول في التنمية العمرانية المستدامة</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>التاريخ:</strong> 10-12 مارس 2025</p>
                    <p>📍 <strong>المكان:</strong> فندق موفنبيك عدن</p>
                    <p>🌍 <strong>المشاركون:</strong> خبراء دوليون ومحليون</p>
                </div>
            </div>

            <!-- Activity 4 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-medium">👥 مجتمع</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">حملة توعية عن نظام البناء</h3>
                <p class="text-gray-600 mb-4">حملة توعوية للمواطنين حول أنظمة البناء والحصول على التراخيص</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>التاريخ:</strong> مستمرة</p>
                    <p>📍 <strong>المكان:</strong> جميع أنحاء المحافظة</p>
                    <p>📺 <strong>الوسائل:</strong> إذاعة، تلفزيون، وسائل التواصل</p>
                </div>
            </div>

            <!-- Activity 5 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-red-100 text-red-800 px-3 py-1 rounded-full text-sm font-medium">⚠️ طوارئ</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">فريق الاستجابة للكوارث الطبيعية</h3>
                <p class="text-gray-600 mb-4">تشكيل فريق متخصص للاستجابة السريعة في حالات الكوارث الطبيعية</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>التاريخ:</strong> فعال على مدار الساعة</p>
                    <p>📍 <strong>التغطية:</strong> جميع محافظات الجنوب</p>
                    <p>🚨 <strong>الاستجابة:</strong> خلال 4 ساعات</p>
                </div>
            </div>

            <!-- Activity 6 -->
            <div class="gov-card">
                <div class="mb-4">
                    <span class="bg-indigo-100 text-indigo-800 px-3 py-1 rounded-full text-sm font-medium">💻 تقنية</span>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">تطوير تطبيق الهيئة الذكي</h3>
                <p class="text-gray-600 mb-4">إطلاق تطبيق ذكي يتيح للمواطنين الوصول لجميع خدمات الهيئة</p>
                <div class="space-y-2 text-sm text-gray-500">
                    <p>📅 <strong>الإطلاق:</strong> أبريل 2025</p>
                    <p>📱 <strong>المنصات:</strong> Android, iOS</p>
                    <p>🔧 <strong>المميزات:</strong> خدمات كاملة + AI مساعد</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Statistics -->
<section class="py-16 bg-gov-blue text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">📈 إحصائيات المشاريع</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl mb-4">🚧</div>
                <h3 class="text-3xl font-bold mb-2">12</h3>
                <p class="text-blue-200">مشروع جاري</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">✅</div>
                <h3 class="text-3xl font-bold mb-2">45</h3>
                <p class="text-blue-200">مشروع مكتمل</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">📅</div>
                <h3 class="text-3xl font-bold mb-2">8</h3>
                <p class="text-blue-200">مشروع مخطط</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">💰</div>
                <h3 class="text-3xl font-bold mb-2">500M$</h3>
                <p class="text-blue-200">إجمالي الاستثمارات</p>
            </div>
        </div>
    </div>
</section>

<!-- Partnership Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🤝 شركاؤنا في التنمية</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="gov-card text-center">
                <div class="text-4xl mb-4">🏛️</div>
                <h3 class="font-bold text-gray-900 mb-2">البنك الدولي</h3>
                <p class="text-gray-600 text-sm">تمويل مشاريع التنمية</p>
            </div>
            <div class="gov-card text-center">
                <div class="text-4xl mb-4">🇺🇳</div>
                <h3 class="font-bold text-gray-900 mb-2">برنامج الأمم المتحدة</h3>
                <p class="text-gray-600 text-sm">برامج التنمية المستدامة</p>
            </div>
            <div class="gov-card text-center">
                <div class="text-4xl mb-4">🇪🇺</div>
                <h3 class="font-bold text-gray-900 mb-2">الاتحاد الأوروبي</h3>
                <p class="text-gray-600 text-sm">مشاريع إعادة الإعمار</p>
            </div>
            <div class="gov-card text-center">
                <div class="text-4xl mb-4">🏢</div>
                <h3 class="font-bold text-gray-900 mb-2">القطاع الخاص</h3>
                <p class="text-gray-600 text-sm">شراكات تنموية</p>
            </div>
        </div>
    </div>
</section>
@endsection