@extends('layouts.app')

@section('title', 'الخدمات الإلكترونية - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('description', 'تعرف على جميع الخدمات الإلكترونية المتاحة في الهيئة العامة للأراضي والمساحة والتخطيط العمراني، بما في ذلك تراخيص البناء والسجل العقاري وفحص المخططات.')

@section('content')
<!-- Page Header -->
<section class="bg-primary-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">الخدمات الإلكترونية</h1>
        <p class="text-xl text-primary-100">احصل على خدمات الهيئة بسهولة وسرعة من خلال منصاتنا الرقمية</p>
    </div>
</section>

<!-- Quick Access Services -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-4">الخدمات السريعة</h2>
            <p class="text-xl text-gray-600">الخدمات الأكثر طلباً متاحة الآن بنقرة واحدة</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
            <!-- Quick Service 1 -->
            <div class="gov-card p-6 text-center">
                <div class="bg-green-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">🔍</span>
                </div>
                <h3 class="text-xl font-bold text-primary-600 mb-3">استعلام عن ترخيص</h3>
                <p class="text-gray-600 mb-4">تحقق من حالة طلب ترخيص البناء الخاص بك</p>
                <button class="gov-button w-full">استعلم الآن</button>
            </div>

            <!-- Quick Service 2 -->
            <div class="gov-card p-6 text-center">
                <div class="bg-blue-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">📄</span>
                </div>
                <h3 class="text-xl font-bold text-primary-600 mb-3">طلب ترخيص جديد</h3>
                <p class="text-gray-600 mb-4">تقديم طلب ترخيص بناء جديد إلكترونياً</p>
                <button class="gov-button w-full">ابدأ الطلب</button>
            </div>

            <!-- Quick Service 3 -->
            <div class="gov-card p-6 text-center">
                <div class="bg-purple-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl">💳</span>
                </div>
                <h3 class="text-xl font-bold text-primary-600 mb-3">الدفع الإلكتروني</h3>
                <p class="text-gray-600 mb-4">ادفع رسوم الخدمات بأمان وسرعة</p>
                <button class="gov-button w-full">ادفع الآن</button>
            </div>
        </div>
    </div>
</section>

<!-- Main Services -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-4">جميع الخدمات</h2>
            <p class="text-xl text-gray-600">مجموعة شاملة من الخدمات المتخصصة</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1: Building Licenses -->
            <div class="gov-card overflow-hidden">
                <div class="bg-primary-600 text-white p-4">
                    <div class="flex items-center">
                        <span class="text-3xl ml-3">🏗️</span>
                        <h3 class="text-xl font-bold">تراخيص البناء</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">إصدار وتجديد تراخيص البناء للمشاريع السكنية والتجارية والصناعية</p>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>ترخيص بناء جديد</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تجديد ترخيص منتهي الصلاحية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تعديل على ترخيص موجود</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>استعلام عن حالة الطلب</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4">
                        <p class="text-sm text-gray-500 mb-2">متوسط مدة الإنجاز: 7-14 يوم عمل</p>
                        <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded transition-colors">
                            ابدأ الخدمة
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 2: Real Estate Registry -->
            <div class="gov-card overflow-hidden">
                <div class="bg-primary-600 text-white p-4">
                    <div class="flex items-center">
                        <span class="text-3xl ml-3">📋</span>
                        <h3 class="text-xl font-bold">السجل العقاري</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">تسجيل وتوثيق الملكيات العقارية وإصدار الوثائق الرسمية</p>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تسجيل ملكية جديدة</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>نقل ملكية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>إصدار شهادة ملكية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>البحث في السجل العقاري</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4">
                        <p class="text-sm text-gray-500 mb-2">متوسط مدة الإنجاز: 5-10 أيام عمل</p>
                        <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded transition-colors">
                            ابدأ الخدمة
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 3: Plan Review -->
            <div class="gov-card overflow-hidden">
                <div class="bg-primary-600 text-white p-4">
                    <div class="flex items-center">
                        <span class="text-3xl ml-3">🗺️</span>
                        <h3 class="text-xl font-bold">فحص المخططات</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">مراجعة واعتماد المخططات الهندسية والتأكد من المطابقة</p>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>فحص المخطط الهندسي</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>اعتماد المخطط</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تعديل على مخطط موجود</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>إصدار شهادة المطابقة</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4">
                        <p class="text-sm text-gray-500 mb-2">متوسط مدة الإنجاز: 3-7 أيام عمل</p>
                        <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded transition-colors">
                            ابدأ الخدمة
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 4: Complaints -->
            <div class="gov-card overflow-hidden">
                <div class="bg-primary-600 text-white p-4">
                    <div class="flex items-center">
                        <span class="text-3xl ml-3">📞</span>
                        <h3 class="text-xl font-bold">الشكاوى والاستفسارات</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">تقديم الشكاوى والاستفسارات وتتبع حالة المعاملات</p>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تقديم شكوى جديدة</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تتبع حالة الشكوى</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>طرح استفسار عام</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>طلب استشارة فنية</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4">
                        <p class="text-sm text-gray-500 mb-2">متوسط مدة الرد: 1-3 أيام عمل</p>
                        <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded transition-colors">
                            ابدأ الخدمة
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 5: Land Management -->
            <div class="gov-card overflow-hidden">
                <div class="bg-primary-600 text-white p-4">
                    <div class="flex items-center">
                        <span class="text-3xl ml-3">🏞️</span>
                        <h3 class="text-xl font-bold">إدارة الأراضي</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">خدمات تنظيم واستخدام الأراضي وإدارة الملكيات</p>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تحديد الملكيات</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تقسيم الأراضي</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تغيير استخدام الأرض</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>معلومات عن قطعة أرض</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4">
                        <p class="text-sm text-gray-500 mb-2">متوسط مدة الإنجاز: 10-20 يوم عمل</p>
                        <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded transition-colors">
                            ابدأ الخدمة
                        </button>
                    </div>
                </div>
            </div>

            <!-- Service 6: Surveying -->
            <div class="gov-card overflow-hidden">
                <div class="bg-primary-600 text-white p-4">
                    <div class="flex items-center">
                        <span class="text-3xl ml-3">📏</span>
                        <h3 class="text-xl font-bold">أعمال المساحة</h3>
                    </div>
                </div>
                <div class="p-6">
                    <p class="text-gray-600 mb-4">تنفيذ أعمال المساحة والرفع المساحي وإعداد الخرائط</p>
                    
                    <div class="space-y-3 mb-4">
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>طلب مسح أرض</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>إعداد خريطة طبوغرافية</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>تحديد الإحداثيات</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <span class="text-green-600 ml-2">✅</span>
                            <span>شهادة مساحة</span>
                        </div>
                    </div>
                    
                    <div class="border-t pt-4">
                        <p class="text-sm text-gray-500 mb-2">متوسط مدة الإنجاز: 15-30 يوم عمل</p>
                        <button class="w-full bg-primary-600 hover:bg-primary-700 text-white py-2 px-4 rounded transition-colors">
                            ابدأ الخدمة
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Service Requirements -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 text-center mb-12">متطلبات الخدمات</h2>
            
            <div class="bg-gray-50 rounded-lg p-8">
                <h3 class="text-xl font-bold text-primary-600 mb-6">المستندات المطلوبة عموماً:</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <h4 class="font-bold text-gray-800 mb-3">للأفراد:</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">📄</span>
                                <span>بطاقة الهوية الشخصية</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">📋</span>
                                <span>وثيقة ملكية الأرض</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">🗺️</span>
                                <span>المخطط الهندسي (حسب الخدمة)</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">💳</span>
                                <span>إيصال دفع الرسوم</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <h4 class="font-bold text-gray-800 mb-3">للشركات:</h4>
                        <ul class="space-y-2">
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">🏢</span>
                                <span>السجل التجاري</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">📜</span>
                                <span>عقد تأسيس الشركة</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">👤</span>
                                <span>تفويض من الشركة</span>
                            </li>
                            <li class="flex items-center">
                                <span class="text-primary-600 ml-2">📄</span>
                                <span>هوية المفوض</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                    <p class="text-blue-800">
                        <strong>ملاحظة:</strong> قد تختلف المتطلبات حسب نوع الخدمة. يرجى مراجعة التفاصيل الكاملة لكل خدمة قبل التقديم.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Digital Services Benefits -->
<section class="py-16 bg-primary-600 text-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">مزايا الخدمات الإلكترونية</h2>
            <p class="text-xl text-primary-100">لماذا تختار خدماتنا الرقمية؟</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="text-center">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-lg font-bold mb-2">سرعة في الإنجاز</h3>
                <p class="text-primary-100">خدمات سريعة وفعالة توفر وقتك</p>
            </div>
            
            <div class="text-center">
                <div class="text-4xl mb-4">🔒</div>
                <h3 class="text-lg font-bold mb-2">أمان وخصوصية</h3>
                <p class="text-primary-100">حماية كاملة لبياناتك الشخصية</p>
            </div>
            
            <div class="text-center">
                <div class="text-4xl mb-4">📱</div>
                <h3 class="text-lg font-bold mb-2">متاح على مدار الساعة</h3>
                <p class="text-primary-100">اطلب الخدمة في أي وقت</p>
            </div>
            
            <div class="text-center">
                <div class="text-4xl mb-4">🎯</div>
                <h3 class="text-lg font-bold mb-2">تتبع حالة الطلب</h3>
                <p class="text-primary-100">تابع تقدم معاملتك بسهولة</p>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-8">هل تحتاج مساعدة؟</h2>
        <p class="text-xl text-gray-600 mb-8">فريق الدعم الفني جاهز لمساعدتك</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div class="gov-card p-6">
                <div class="text-3xl mb-4">📞</div>
                <h3 class="font-bold text-primary-600 mb-2">الدعم الهاتفي</h3>
                <p class="text-gray-600 mb-3">من السبت إلى الخميس<br>8:00 ص - 2:00 م</p>
                <a href="tel:8000034" class="text-primary-600 hover:text-primary-700 font-medium">
                    8000034
                </a>
            </div>
            
            <div class="gov-card p-6">
                <div class="text-3xl mb-4">💬</div>
                <h3 class="font-bold text-primary-600 mb-2">الدردشة المباشرة</h3>
                <p class="text-gray-600 mb-3">متاح أثناء ساعات العمل<br>استجابة فورية</p>
                <button class="text-primary-600 hover:text-primary-700 font-medium">
                    ابدأ المحادثة
                </button>
            </div>
            
            <div class="gov-card p-6">
                <div class="text-3xl mb-4">📧</div>
                <h3 class="font-bold text-primary-600 mb-2">البريد الإلكتروني</h3>
                <p class="text-gray-600 mb-3">للاستفسارات المفصلة<br>رد خلال 24 ساعة</p>
                <a href="mailto:support@galsup.gov.ye" class="text-primary-600 hover:text-primary-700 font-medium">
                    support@galsup.gov.ye
                </a>
            </div>
        </div>
    </div>
</section>
@endsection