@extends('layouts.app')

@section('title', 'عن الهيئة - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('description', 'تعرف على الهيئة العامة للأراضي والمساحة والتخطيط العمراني، تاريخها، رؤيتها، رسالتها، وأهدافها في خدمة الجمهورية اليمنية.')

@section('content')
<!-- Page Header -->
<section class="bg-primary-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">عن الهيئة</h1>
        <p class="text-xl text-primary-100">تعرف على تاريخنا ورؤيتنا ومهامنا في خدمة الوطن</p>
    </div>
</section>

<!-- Overview Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-6">نبذة عن الهيئة</h2>
                <div class="bg-gray-50 rounded-lg p-8">
                    <p class="text-lg text-gray-700 leading-relaxed mb-6">
                        الهيئة العامة للأراضي والمساحة والتخطيط العمراني هي الجهة الحكومية المسؤولة عن إدارة وتنظيم الأراضي والمساحة والتخطيط العمراني في الجمهورية اليمنية. تأسست الهيئة بموجب القرار الجمهوري رقم (35) لسنة 2006، وتم تطويرها وتحديث هيكلها التنظيمي بموجب القرار رقم 64 لسنة 2008.
                    </p>
                    <p class="text-lg text-gray-700 leading-relaxed">
                        تتخذ الهيئة من مدينة عدن مقراً رئيسياً لها، وتعمل على تقديم خدمات متنوعة ومتطورة في مجالات التسجيل العقاري، وإصدار تراخيص البناء، وفحص المخططات، والتخطيط العمراني المستدام، بالإضافة إلى إزالة العشوائيات وتنظيم المدن.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision, Mission, Values -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Vision -->
            <div class="gov-card p-8 text-center">
                <div class="bg-primary-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">👁️</span>
                </div>
                <h3 class="text-2xl font-bold text-primary-600 mb-4">رؤيتنا</h3>
                <p class="text-gray-700 leading-relaxed">
                    أن نكون الهيئة الرائدة في مجال إدارة الأراضي والتخطيط العمراني المستدام، ونساهم في بناء مدن حديثة ومتطورة تلبي احتياجات المواطنين وتحقق التنمية المستدامة في الجمهورية اليمنية.
                </p>
            </div>

            <!-- Mission -->
            <div class="gov-card p-8 text-center">
                <div class="bg-primary-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">🎯</span>
                </div>
                <h3 class="text-2xl font-bold text-primary-600 mb-4">رسالتنا</h3>
                <p class="text-gray-700 leading-relaxed">
                    تقديم خدمات متميزة ومتطورة في مجال إدارة الأراضي والمساحة والتخطيط العمراني، والعمل على تطوير البنية التحتية وتنظيم المدن، مع ضمان الشفافية والكفاءة في جميع العمليات والإجراءات.
                </p>
            </div>

            <!-- Values -->
            <div class="gov-card p-8 text-center">
                <div class="bg-primary-600 text-white w-20 h-20 rounded-full flex items-center justify-center mx-auto mb-6">
                    <span class="text-3xl">💎</span>
                </div>
                <h3 class="text-2xl font-bold text-primary-600 mb-4">قيمنا</h3>
                <p class="text-gray-700 leading-relaxed">
                    الشفافية، الكفاءة، الابتكار، الاستدامة، خدمة المواطن، الجودة في العمل، والالتزام بالمعايير المهنية العالية في جميع مجالات عملنا.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Legal Framework -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 text-center mb-12">الإطار القانوني والتنظيمي</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Founding Law -->
                <div class="gov-card p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4">
                            <span class="text-xl">📜</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary-600">القرار المؤسس</h3>
                    </div>
                    <p class="text-gray-700 mb-3">
                        <strong>القرار الجمهوري رقم (35) لسنة 2006</strong>
                    </p>
                    <p class="text-gray-600">
                        القرار الذي أسس الهيئة العامة للأراضي والمساحة والتخطيط العمراني كجهة حكومية مستقلة.
                    </p>
                </div>

                <!-- Development Law -->
                <div class="gov-card p-6">
                    <div class="flex items-center mb-4">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4">
                            <span class="text-xl">⚖️</span>
                        </div>
                        <h3 class="text-xl font-bold text-primary-600">قرار التطوير</h3>
                    </div>
                    <p class="text-gray-700 mb-3">
                        <strong>القرار رقم 64 لسنة 2008</strong>
                    </p>
                    <p class="text-gray-600">
                        القرار الذي طور وحدث الهيكل التنظيمي للهيئة وحدد اختصاصاتها بشكل أكثر تفصيلاً.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Responsibilities -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 text-center mb-12">اختصاصات ومهام الهيئة</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Responsibility 1 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📋</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">التسجيل العقاري</h3>
                    <p class="text-gray-600 text-sm">
                        إدارة وتنظيم السجل العقاري وتوثيق الملكيات وإصدار الوثائق العقارية الرسمية.
                    </p>
                </div>

                <!-- Responsibility 2 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🏗️</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">تراخيص البناء</h3>
                    <p class="text-gray-600 text-sm">
                        إصدار وتجديد تراخيص البناء للمشاريع السكنية والتجارية والصناعية وفقاً للمعايير المعتمدة.
                    </p>
                </div>

                <!-- Responsibility 3 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🗺️</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">التخطيط العمراني</h3>
                    <p class="text-gray-600 text-sm">
                        وضع المخططات التفصيلية للمدن والأحياء والعمل على التطوير العمراني المستدام.
                    </p>
                </div>

                <!-- Responsibility 4 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🧹</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">إزالة العشوائيات</h3>
                    <p class="text-gray-600 text-sm">
                        العمل على إزالة المساكن العشوائية وتنظيم المناطق الحضرية وفقاً للمخططات المعتمدة.
                    </p>
                </div>

                <!-- Responsibility 5 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📏</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">أعمال المساحة</h3>
                    <p class="text-gray-600 text-sm">
                        تنفيذ أعمال المساحة والرفع المساحي وإعداد الخرائط والمخططات الطبوغرافية.
                    </p>
                </div>

                <!-- Responsibility 6 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🏞️</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">إدارة الأراضي</h3>
                    <p class="text-gray-600 text-sm">
                        تنظيم استخدام الأراضي وتحديد الملكيات وإدارة الأراضي الحكومية والخاصة.
                    </p>
                </div>

                <!-- Responsibility 7 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">🔍</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">فحص المخططات</h3>
                    <p class="text-gray-600 text-sm">
                        مراجعة واعتماد المخططات الهندسية والتأكد من مطابقتها للمعايير والمواصفات المعتمدة.
                    </p>
                </div>

                <!-- Responsibility 8 -->
                <div class="gov-card p-6 text-center">
                    <div class="bg-primary-600 text-white w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl">📞</span>
                    </div>
                    <h3 class="text-lg font-bold text-primary-600 mb-3">خدمة المواطنين</h3>
                    <p class="text-gray-600 text-sm">
                        تقديم الدعم والمساعدة للمواطنين وتلقي الشكاوى والاستفسارات والعمل على حلها.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organizational Structure -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 text-center mb-12">الهيكل التنظيمي</h2>
            
            <!-- President -->
            <div class="text-center mb-12">
                <div class="w-24 h-24 bg-primary-600 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-white font-bold text-3xl">س</span>
                </div>
                <h3 class="text-2xl font-bold text-primary-600 mb-2">م. سالم العولقي</h3>
                <p class="text-lg text-gray-600 mb-2">رئيس الهيئة العامة للأراضي والمساحة والتخطيط العمراني</p>
                <p class="text-gray-500">منذ عام 2025</p>
            </div>

            <!-- Departments -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="gov-card p-4 text-center">
                    <h4 class="font-bold text-primary-600 mb-2">إدارة التسجيل العقاري</h4>
                    <p class="text-sm text-gray-600">مسؤولة عن السجل العقاري والتوثيق</p>
                </div>
                
                <div class="gov-card p-4 text-center">
                    <h4 class="font-bold text-primary-600 mb-2">إدارة التراخيص</h4>
                    <p class="text-sm text-gray-600">إصدار وتجديد تراخيص البناء</p>
                </div>
                
                <div class="gov-card p-4 text-center">
                    <h4 class="font-bold text-primary-600 mb-2">إدارة التخطيط العمراني</h4>
                    <p class="text-sm text-gray-600">وضع المخططات والتطوير العمراني</p>
                </div>
                
                <div class="gov-card p-4 text-center">
                    <h4 class="font-bold text-primary-600 mb-2">إدارة المساحة</h4>
                    <p class="text-sm text-gray-600">أعمال المساحة والرفع المساحي</p>
                </div>
                
                <div class="gov-card p-4 text-center">
                    <h4 class="font-bold text-primary-600 mb-2">إدارة تقنية المعلومات</h4>
                    <p class="text-sm text-gray-600">التحول الرقمي والأنظمة الإلكترونية</p>
                </div>
                
                <div class="gov-card p-4 text-center">
                    <h4 class="font-bold text-primary-600 mb-2">إدارة خدمة المواطنين</h4>
                    <p class="text-sm text-gray-600">تلقي الشكاوى وخدمة العملاء</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-primary-600 mb-12">إنجازاتنا</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="gov-card p-6">
                    <div class="text-4xl mb-4">🏆</div>
                    <h3 class="text-xl font-bold text-primary-600 mb-3">التميز في الخدمة</h3>
                    <p class="text-gray-600">
                        حققت الهيئة تقدماً كبيراً في تطوير الخدمات وتحسين جودة الأداء وسرعة الإنجاز.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <div class="text-4xl mb-4">💻</div>
                    <h3 class="text-xl font-bold text-primary-600 mb-3">التحول الرقمي</h3>
                    <p class="text-gray-600">
                        إطلاق منصات إلكترونية متطورة لتقديم الخدمات بشكل أسرع وأكثر كفاءة.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <div class="text-4xl mb-4">🌱</div>
                    <h3 class="text-xl font-bold text-primary-600 mb-3">التنمية المستدامة</h3>
                    <p class="text-gray-600">
                        العمل على تطوير مشاريع عمرانية مستدامة تراعي البيئة والمجتمع.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <div class="text-4xl mb-4">🤝</div>
                    <h3 class="text-xl font-bold text-primary-600 mb-3">الشراكات الفعالة</h3>
                    <p class="text-gray-600">
                        بناء شراكات قوية مع الجهات الحكومية والقطاع الخاص والمجتمع المدني.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-primary-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-8">للتواصل معنا</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
            <div>
                <div class="text-3xl mb-2">📍</div>
                <h3 class="font-bold mb-2">الموقع</h3>
                <p class="text-primary-100">عدن - الجمهورية اليمنية</p>
            </div>
            <div>
                <div class="text-3xl mb-2">📞</div>
                <h3 class="font-bold mb-2">الهاتف</h3>
                <p class="text-primary-100">01252590</p>
                <p class="text-primary-100">الخط الساخن: 8000034</p>
            </div>
            <div>
                <div class="text-3xl mb-2">🌐</div>
                <h3 class="font-bold mb-2">الإنترنت</h3>
                <p class="text-primary-100">www.galsup.gov.ye</p>
                <p class="text-primary-100">info@galsup.gov.ye</p>
            </div>
        </div>
    </div>
</section>
@endsection