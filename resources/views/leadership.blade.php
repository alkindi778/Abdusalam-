@extends('layouts.app')

@section('title', 'الإدارة والقيادة - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('content')
<!-- Page Header -->
<section class="bg-gradient-gov text-white py-16">
    <div class="container mx-auto px-4">
        <div class="text-center">
            <h1 class="text-4xl lg:text-5xl font-bold mb-6">👥 الإدارة والقيادة</h1>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                تعرف على قيادة الهيئة والهيكل التنظيمي والفريق الإداري المتخصص في تطوير منظومة الأراضي والمساحة والتخطيط العمراني
            </p>
        </div>
    </div>
</section>

<!-- Current Leadership -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">👔 القيادة الحالية</h2>
        
        <!-- Chairman -->
        <div class="max-w-5xl mx-auto mb-12">
            <div class="gov-card border-r-4 border-gov-blue">
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 items-center">
                    <div class="text-center">
                        <div class="bg-gov-blue rounded-full w-32 h-32 flex items-center justify-center text-5xl text-white mx-auto mb-4">
                            👨‍💼
                        </div>
                        <div class="bg-yellow-100 text-yellow-800 px-3 py-1 rounded-full text-sm font-medium mb-3 inline-block">
                            🏆 الرئيس الحالي
                        </div>
                    </div>
                    <div class="lg:col-span-3">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2">المهندس سالم العولقي</h3>
                        <p class="text-lg text-gov-blue font-medium mb-4">رئيس الهيئة العامة للأراضي والمساحة والتخطيط العمراني</p>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">📅 معلومات التعيين</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li>• تاريخ التعيين: يناير 2025</li>
                                    <li>• القرار: قرار رئاسي رقم (12) لسنة 2025</li>
                                    <li>• مدة الخدمة المتوقعة: 4 سنوات</li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-2">🎓 المؤهلات العلمية</h4>
                                <ul class="space-y-1 text-gray-600">
                                    <li>• ماجستير في الهندسة المدنية</li>
                                    <li>• دبلوم عالي في التخطيط العمراني</li>
                                    <li>• 15 سنة خبرة في إدارة المشاريع</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-bold text-gray-900 mb-2">💼 الرؤية الإدارية</h4>
                            <p class="text-gray-700 leading-relaxed">
                                "نسعى لتحويل الهيئة إلى مؤسسة رقمية متطورة تقدم خدمات متميزة للمواطنين، مع التركيز على التحول الرقمي والشفافية والكفاءة في الأداء لتحقيق التنمية المستدامة في اليمن."
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Deputy and Senior Management -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Deputy Chairman -->
            <div class="gov-card">
                <div class="text-center mb-6">
                    <div class="bg-blue-100 rounded-full w-24 h-24 flex items-center justify-center text-3xl mx-auto mb-4">
                        👨‍💼
                    </div>
                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium">نائب الرئيس</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 text-center mb-2">د. أحمد الحضرمي</h3>
                <p class="text-gov-blue font-medium text-center mb-4">نائب رئيس الهيئة للشؤون الفنية</p>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> دكتوراه في هندسة المساحة</p>
                    <p>📅 <strong>الخبرة:</strong> 18 سنة في المساحة والخرائط</p>
                    <p>🎯 <strong>التخصص:</strong> المساحة والخرائط الرقمية</p>
                </div>
            </div>

            <!-- Secretary General -->
            <div class="gov-card">
                <div class="text-center mb-6">
                    <div class="bg-green-100 rounded-full w-24 h-24 flex items-center justify-center text-3xl mx-auto mb-4">
                        👩‍💼
                    </div>
                    <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-medium">الأمين العام</span>
                </div>
                <h3 class="text-xl font-bold text-gray-900 text-center mb-2">أ. فاطمة المحضار</h3>
                <p class="text-gov-blue font-medium text-center mb-4">الأمين العام للهيئة</p>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> ماجستير في الإدارة العامة</p>
                    <p>📅 <strong>الخبرة:</strong> 12 سنة في الإدارة الحكومية</p>
                    <p>🎯 <strong>التخصص:</strong> الإدارة والتطوير المؤسسي</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Organizational Structure -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🏗️ الهيكل التنظيمي</h2>
        
        <!-- Organization Chart -->
        <div class="max-w-6xl mx-auto">
            <!-- Level 1: Chairman -->
            <div class="text-center mb-8">
                <div class="inline-block gov-card bg-gov-blue text-white">
                    <h3 class="font-bold">👨‍💼 رئيس الهيئة</h3>
                    <p class="text-blue-200 text-sm">م. سالم العولقي</p>
                </div>
            </div>
            
            <!-- Level 2: Deputies -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                <div class="gov-card bg-blue-50 text-center">
                    <h4 class="font-bold text-gray-900">👨‍💼 نائب الرئيس</h4>
                    <p class="text-sm text-gray-600">للشؤون الفنية</p>
                    <p class="text-sm text-gov-blue">د. أحمد الحضرمي</p>
                </div>
                <div class="gov-card bg-green-50 text-center">
                    <h4 class="font-bold text-gray-900">👩‍💼 الأمين العام</h4>
                    <p class="text-sm text-gray-600">الشؤون الإدارية</p>
                    <p class="text-sm text-gov-blue">أ. فاطمة المحضار</p>
                </div>
                <div class="gov-card bg-purple-50 text-center">
                    <h4 class="font-bold text-gray-900">👨‍💼 مدير التخطيط</h4>
                    <p class="text-sm text-gray-600">التخطيط العمراني</p>
                    <p class="text-sm text-gov-blue">م. خالد الشعيبي</p>
                </div>
            </div>
            
            <!-- Level 3: Departments -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">📋</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة تراخيص البناء</h5>
                    <p class="text-xs text-gray-600">م. عبدالله الزبيدي</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">📝</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة السجل العقاري</h5>
                    <p class="text-xs text-gray-600">أ. سلمى الحميدي</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">🗺️</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة المساحة</h5>
                    <p class="text-xs text-gray-600">د. محمد البيضاني</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">🏗️</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة المخططات</h5>
                    <p class="text-xs text-gray-600">م. نوال العلوي</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">💻</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة تقنية المعلومات</h5>
                    <p class="text-xs text-gray-600">م. أحمد السالمي</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">📊</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة التخطيط والمتابعة</h5>
                    <p class="text-xs text-gray-600">أ. زينب الفقيه</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">💰</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة الشؤون المالية</h5>
                    <p class="text-xs text-gray-600">أ. حسام الدين</p>
                </div>
                <div class="gov-card text-center">
                    <div class="text-2xl mb-2">👥</div>
                    <h5 class="font-bold text-gray-900 text-sm">إدارة الموارد البشرية</h5>
                    <p class="text-xs text-gray-600">أ. مريم الأهدل</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Department Heads -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🏛️ مدراء الإدارات</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- IT Director -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        💻
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">م. أحمد السالمي</h3>
                    <p class="text-gov-blue font-medium">مدير إدارة تقنية المعلومات</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> بكالوريوس هندسة الحاسوب</p>
                    <p>📅 <strong>الخبرة:</strong> 10 سنوات في IT</p>
                    <p>🎯 <strong>المسؤوليات:</strong></p>
                    <ul class="text-xs list-disc list-inside space-y-1 mr-4">
                        <li>تطوير الأنظمة الرقمية</li>
                        <li>إدارة البنية التحتية التقنية</li>
                        <li>أمن المعلومات والبيانات</li>
                    </ul>
                </div>
            </div>

            <!-- Building Permits Director -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        📋
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">م. عبدالله الزبيدي</h3>
                    <p class="text-gov-blue font-medium">مدير إدارة تراخيص البناء</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> بكالوريوس هندسة معمارية</p>
                    <p>📅 <strong>الخبرة:</strong> 14 سنة في التراخيص</p>
                    <p>🎯 <strong>المسؤوليات:</strong></p>
                    <ul class="text-xs list-disc list-inside space-y-1 mr-4">
                        <li>إصدار تراخيص البناء</li>
                        <li>مراجعة الطلبات والوثائق</li>
                        <li>متابعة الامتثال للأنظمة</li>
                    </ul>
                </div>
            </div>

            <!-- Real Estate Registry Director -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-purple-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        📝
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">أ. سلمى الحميدي</h3>
                    <p class="text-gov-blue font-medium">مدير إدارة السجل العقاري</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> بكالوريوس حقوق</p>
                    <p>📅 <strong>الخبرة:</strong> 12 سنة في السجل العقاري</p>
                    <p>🎯 <strong>المسؤوليات:</strong></p>
                    <ul class="text-xs list-disc list-inside space-y-1 mr-4">
                        <li>تسجيل الملكيات العقارية</li>
                        <li>إصدار وثائق الملكية</li>
                        <li>معالجة نزاعات الأراضي</li>
                    </ul>
                </div>
            </div>

            <!-- Surveying Director -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-yellow-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        🗺️
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">د. محمد البيضاني</h3>
                    <p class="text-gov-blue font-medium">مدير إدارة المساحة</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> دكتوراه في هندسة المساحة</p>
                    <p>📅 <strong>الخبرة:</strong> 16 سنة في المساحة</p>
                    <p>🎯 <strong>المسؤوليات:</strong></p>
                    <ul class="text-xs list-disc list-inside space-y-1 mr-4">
                        <li>إعداد الخرائط المساحية</li>
                        <li>المسوحات الميدانية</li>
                        <li>استخدام تقنيات GIS</li>
                    </ul>
                </div>
            </div>

            <!-- Planning Director -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-red-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        🏗️
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">م. نوال العلوي</h3>
                    <p class="text-gov-blue font-medium">مدير إدارة المخططات</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> ماجستير في التخطيط العمراني</p>
                    <p>📅 <strong>الخبرة:</strong> 11 سنة في التخطيط</p>
                    <p>🎯 <strong>المسؤوليات:</strong></p>
                    <ul class="text-xs list-disc list-inside space-y-1 mr-4">
                        <li>مراجعة المخططات العمرانية</li>
                        <li>وضع معايير التطوير</li>
                        <li>التنسيق مع البلديات</li>
                    </ul>
                </div>
            </div>

            <!-- HR Director -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-indigo-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        👥
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">أ. مريم الأهدل</h3>
                    <p class="text-gov-blue font-medium">مدير إدارة الموارد البشرية</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> بكالوريوس إدارة أعمال</p>
                    <p>📅 <strong>الخبرة:</strong> 9 سنوات في الموارد البشرية</p>
                    <p>🎯 <strong>المسؤوليات:</strong></p>
                    <ul class="text-xs list-disc list-inside space-y-1 mr-4">
                        <li>إدارة الموظفين والتوظيف</li>
                        <li>برامج التدريب والتطوير</li>
                        <li>تقييم الأداء والترقيات</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Management Statistics -->
<section class="py-16 bg-gradient-light">
    <div class="container mx-auto px-4">
        <h2 class="section-title">📊 إحصائيات الكادر الإداري</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="gov-card text-center">
                <div class="feature-icon bg-blue-600">👥</div>
                <h3 class="text-2xl font-bold text-gov-blue">1,200+</h3>
                <p class="text-gray-600">إجمالي الموظفين</p>
            </div>
            <div class="gov-card text-center">
                <div class="feature-icon bg-green-600">🎓</div>
                <h3 class="text-2xl font-bold text-gov-blue">850+</h3>
                <p class="text-gray-600">حملة الشهادات الجامعية</p>
            </div>
            <div class="gov-card text-center">
                <div class="feature-icon bg-purple-600">👨‍💼</div>
                <h3 class="text-2xl font-bold text-gov-blue">45</h3>
                <p class="text-gray-600">مناصب إدارية عليا</p>
            </div>
            <div class="gov-card text-center">
                <div class="feature-icon bg-orange-600">🏆</div>
                <h3 class="text-2xl font-bold text-gov-blue">15</h3>
                <p class="text-gray-600">سنة متوسط الخبرة</p>
            </div>
        </div>
    </div>
</section>

<!-- Advisory Board -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="section-title">🎯 المجلس الاستشاري</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Advisor 1 -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-yellow-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        👨‍🏫
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">د. علي الرفاعي</h3>
                    <p class="text-gov-blue font-medium">استشاري التخطيط العمراني</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> دكتوراه في التخطيط العمراني</p>
                    <p>🏛️ <strong>الجامعة:</strong> جامعة القاهرة</p>
                    <p>📚 <strong>التخصص:</strong> التنمية المستدامة</p>
                </div>
            </div>

            <!-- Advisor 2 -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-blue-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        👩‍🏫
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">د. سارة الشامي</h3>
                    <p class="text-gov-blue font-medium">استشارية تقنية المعلومات</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> دكتوراه في علوم الحاسوب</p>
                    <p>🏛️ <strong>الجامعة:</strong> جامعة الملك سعود</p>
                    <p>📚 <strong>التخصص:</strong> الذكاء الاصطناعي</p>
                </div>
            </div>

            <!-- Advisor 3 -->
            <div class="gov-card">
                <div class="text-center mb-4">
                    <div class="bg-green-100 rounded-full w-20 h-20 flex items-center justify-center text-3xl mx-auto mb-4">
                        👨‍⚖️
                    </div>
                    <h3 class="text-lg font-bold text-gray-900">أ.د. محمد الأكوع</h3>
                    <p class="text-gov-blue font-medium">استشاري قانوني</p>
                </div>
                <div class="space-y-2 text-sm text-gray-600">
                    <p>🎓 <strong>المؤهل:</strong> دكتوراه في القانون العام</p>
                    <p>🏛️ <strong>الجامعة:</strong> جامعة صنعاء</p>
                    <p>📚 <strong>التخصص:</strong> قانون الأراضي والعقارات</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Management Achievements -->
<section class="py-16 bg-gov-blue text-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">🏆 إنجازات الإدارة</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="text-4xl mb-4">🚀</div>
                <h3 class="text-xl font-bold mb-2">التحول الرقمي</h3>
                <p class="text-blue-200">إطلاق 6 أنظمة رقمية متطورة</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">⚡</div>
                <h3 class="text-xl font-bold mb-2">تسريع الخدمات</h3>
                <p class="text-blue-200">تقليل أوقات المعاملات بنسبة 75%</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">🎯</div>
                <h3 class="text-xl font-bold mb-2">الشفافية</h3>
                <p class="text-blue-200">تطبيق معايير الحوكمة الرقمية</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">📈</div>
                <h3 class="text-xl font-bold mb-2">رضا المستفيدين</h3>
                <p class="text-blue-200">تحسين مستوى الرضا إلى 90%</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">🌍</div>
                <h3 class="text-xl font-bold mb-2">الشراكات الدولية</h3>
                <p class="text-blue-200">توقيع 12 اتفاقية تعاون</p>
            </div>
            <div class="text-center">
                <div class="text-4xl mb-4">👨‍🎓</div>
                <h3 class="text-xl font-bold mb-2">تطوير الكوادر</h3>
                <p class="text-blue-200">تدريب 500+ موظف سنوياً</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Leadership -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="section-title">📞 التواصل مع الإدارة</h2>
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="gov-card">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">📧 مكتب رئيس الهيئة</h3>
                    <div class="space-y-3 text-gray-600">
                        <p>📞 <strong>الهاتف المباشر:</strong> 01252590 تحويلة 101</p>
                        <p>📧 <strong>البريد الإلكتروني:</strong> chairman@galsup.gov.ye</p>
                        <p>🕒 <strong>ساعات العمل:</strong> الأحد - الخميس: 8:00 ص - 3:00 م</p>
                        <p>📍 <strong>الموقع:</strong> الطابق الرابع - مكتب رقم 401</p>
                    </div>
                </div>
                
                <div class="gov-card">
                    <h3 class="text-lg font-bold text-gray-900 mb-4">📋 تحديد موعد</h3>
                    <div class="space-y-4">
                        <p class="text-gray-600">لتحديد موعد مع الإدارة العليا:</p>
                        <button class="gov-button w-full">📅 احجز موعد</button>
                        <p class="text-sm text-gray-500">
                            * يتم مراجعة طلبات المواعيد خلال 48 ساعة عمل
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection