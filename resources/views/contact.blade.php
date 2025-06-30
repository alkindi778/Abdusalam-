@extends('layouts.app')

@section('title', 'اتصل بنا - الهيئة العامة للأراضي والمساحة والتخطيط العمراني')

@section('description', 'تواصل مع الهيئة العامة للأراضي والمساحة والتخطيط العمراني. معلومات الاتصال، العنوان، ساعات العمل، وطرق التواصل المختلفة.')

@push('styles')
<style>
    #map {
        height: 400px;
        width: 100%;
        border-radius: 0.5rem;
    }
</style>
@endpush

@section('content')
<!-- Page Header -->
<section class="bg-primary-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">اتصل بنا</h1>
        <p class="text-xl text-primary-100">نحن هنا لخدمتكم والإجابة على استفساراتكم</p>
    </div>
</section>

<!-- Contact Information -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Contact Details -->
            <div>
                <h2 class="text-3xl font-bold text-primary-600 mb-8">معلومات التواصل</h2>
                
                <div class="space-y-6">
                    <!-- Address -->
                    <div class="flex items-start">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4 mt-1">
                            <span class="text-xl">📍</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">العنوان</h3>
                            <p class="text-gray-600">
                                الهيئة العامة للأراضي والمساحة والتخطيط العمراني<br>
                                عدن - الجمهورية اليمنية
                            </p>
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="flex items-start">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4 mt-1">
                            <span class="text-xl">📞</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">الهاتف</h3>
                            <p class="text-gray-600 mb-1">
                                <a href="tel:01252590" class="hover:text-primary-600">01252590</a>
                            </p>
                            <p class="text-gray-600">
                                الخط الساخن: <a href="tel:8000034" class="hover:text-primary-600 font-medium">8000034</a>
                            </p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="flex items-start">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4 mt-1">
                            <span class="text-xl">📧</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">البريد الإلكتروني</h3>
                            <p class="text-gray-600 mb-1">
                                <a href="mailto:info@galsup.gov.ye" class="hover:text-primary-600">info@galsup.gov.ye</a>
                            </p>
                            <p class="text-gray-600">
                                الدعم الفني: <a href="mailto:support@galsup.gov.ye" class="hover:text-primary-600">support@galsup.gov.ye</a>
                            </p>
                        </div>
                    </div>

                    <!-- Website -->
                    <div class="flex items-start">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4 mt-1">
                            <span class="text-xl">🌐</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">الموقع الإلكتروني</h3>
                            <p class="text-gray-600">
                                <a href="https://www.galsup.gov.ye" target="_blank" class="hover:text-primary-600">www.galsup.gov.ye</a>
                            </p>
                        </div>
                    </div>

                    <!-- Working Hours -->
                    <div class="flex items-start">
                        <div class="bg-primary-600 text-white w-12 h-12 rounded-full flex items-center justify-center ml-4 mt-1">
                            <span class="text-xl">🕐</span>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-gray-800 mb-2">ساعات العمل</h3>
                            <div class="text-gray-600">
                                <p class="mb-1">السبت - الخميس: 8:00 ص - 2:00 م</p>
                                <p class="text-sm text-gray-500">الجمعة: مغلق</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Social Media -->
                <div class="mt-8">
                    <h3 class="text-lg font-bold text-gray-800 mb-4">تابعونا على</h3>
                    <div class="flex space-x-reverse space-x-4">
                        <a href="#" class="bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition-colors">
                            <span>📘</span>
                        </a>
                        <a href="#" class="bg-blue-500 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-600 transition-colors">
                            <span>📱</span>
                        </a>
                        <a href="#" class="bg-red-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-red-700 transition-colors">
                            <span>📺</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div>
                <h2 class="text-3xl font-bold text-primary-600 mb-8">أرسل لنا رسالة</h2>
                
                <form class="bg-gray-50 p-6 rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                        <div>
                            <label for="firstName" class="block text-sm font-medium text-gray-700 mb-2">الاسم الأول</label>
                            <input type="text" id="firstName" name="firstName" required 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                        <div>
                            <label for="lastName" class="block text-sm font-medium text-gray-700 mb-2">اسم العائلة</label>
                            <input type="text" id="lastName" name="lastName" required 
                                   class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" required 
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">رقم الهاتف</label>
                        <input type="tel" id="phone" name="phone" 
                               class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                    </div>

                    <div class="mb-4">
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">موضوع الرسالة</label>
                        <select id="subject" name="subject" required 
                                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent">
                            <option value="">اختر الموضوع</option>
                            <option value="license">استفسار عن ترخيص البناء</option>
                            <option value="registry">السجل العقاري</option>
                            <option value="planning">التخطيط العمراني</option>
                            <option value="survey">أعمال المساحة</option>
                            <option value="complaint">شكوى</option>
                            <option value="suggestion">اقتراح</option>
                            <option value="other">أخرى</option>
                        </select>
                    </div>

                    <div class="mb-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">الرسالة</label>
                        <textarea id="message" name="message" rows="5" required 
                                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary-500 focus:border-transparent"
                                  placeholder="اكتب رسالتك هنا..."></textarea>
                    </div>

                    <button type="submit" class="gov-button w-full text-lg">
                        إرسال الرسالة
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-primary-600 text-center mb-8">موقعنا على الخريطة</h2>
        
        <div class="max-w-4xl mx-auto">
            <div id="map" class="shadow-lg"></div>
            
            <div class="mt-6 bg-white p-6 rounded-lg shadow-md">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
                    <div>
                        <h4 class="font-bold text-primary-600 mb-2">العنوان الكامل</h4>
                        <p class="text-gray-600 text-sm">الهيئة العامة للأراضي والمساحة والتخطيط العمراني، عدن، الجمهورية اليمنية</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary-600 mb-2">أقرب معلم</h4>
                        <p class="text-gray-600 text-sm">بالقرب من مجمع الوزارات الحكومية</p>
                    </div>
                    <div>
                        <h4 class="font-bold text-primary-600 mb-2">المواصلات</h4>
                        <p class="text-gray-600 text-sm">متوفر مواقف سيارات ومواصلات عامة</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Emergency Contact -->
<section class="py-16 bg-red-600 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-3xl font-bold mb-4">للحالات العاجلة</h2>
        <p class="text-xl mb-8">في حالة الطوارئ أو الحاجة للمساعدة العاجلة</p>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-2xl mx-auto">
            <div class="bg-red-700 rounded-lg p-6">
                <div class="text-3xl mb-3">🚨</div>
                <h3 class="text-lg font-bold mb-2">الخط الساخن</h3>
                <a href="tel:8000034" class="text-2xl font-bold hover:text-red-200">8000034</a>
                <p class="text-sm text-red-200 mt-2">متاح 24/7</p>
            </div>
            
            <div class="bg-red-700 rounded-lg p-6">
                <div class="text-3xl mb-3">⚡</div>
                <h3 class="text-lg font-bold mb-2">الطوارئ الفنية</h3>
                <a href="mailto:emergency@galsup.gov.ye" class="text-lg font-bold hover:text-red-200">emergency@galsup.gov.ye</a>
                <p class="text-sm text-red-200 mt-2">رد فوري</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-3xl font-bold text-primary-600 text-center mb-12">الأسئلة الشائعة</h2>
            
            <div class="space-y-6">
                <div class="gov-card p-6">
                    <h3 class="text-lg font-bold text-primary-600 mb-3">ما هي ساعات العمل في الهيئة؟</h3>
                    <p class="text-gray-600">
                        ساعات العمل الرسمية من السبت إلى الخميس من 8:00 صباحاً حتى 2:00 بعد الظهر. 
                        الخدمات الإلكترونية متاحة على مدار الساعة.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <h3 class="text-lg font-bold text-primary-600 mb-3">كم يستغرق إصدار ترخيص البناء؟</h3>
                    <p class="text-gray-600">
                        متوسط مدة إصدار ترخيص البناء من 7-14 يوم عمل بعد استكمال جميع المستندات المطلوبة 
                        ودفع الرسوم المقررة.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <h3 class="text-lg font-bold text-primary-600 mb-3">هل يمكن تقديم الطلبات إلكترونياً؟</h3>
                    <p class="text-gray-600">
                        نعم، معظم الخدمات متاحة إلكترونياً من خلال موقعنا الرسمي. يمكنك تقديم الطلبات 
                        ومتابعة حالتها ودفع الرسوم عبر الإنترنت.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <h3 class="text-lg font-bold text-primary-600 mb-3">كيف يمكنني تقديم شكوى؟</h3>
                    <p class="text-gray-600">
                        يمكنك تقديم الشكاوى من خلال الموقع الإلكتروني، أو الاتصال بالخط الساخن 8000034، 
                        أو زيارة مقر الهيئة شخصياً. جميع الشكاوى تُعامل بسرية تامة.
                    </p>
                </div>
                
                <div class="gov-card p-6">
                    <h3 class="text-lg font-bold text-primary-600 mb-3">ما هي طرق الدفع المتاحة؟</h3>
                    <p class="text-gray-600">
                        نقبل الدفع النقدي في مقر الهيئة، والدفع الإلكتروني عبر البطاقات المصرفية 
                        والمحافظ الرقمية من خلال موقعنا الإلكتروني.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    function initMap() {
        // Coordinates for Aden, Yemen (approximate location for government buildings)
        const adenCoords = { lat: 12.7797, lng: 45.0395 };
        
        const map = new google.maps.Map(document.getElementById("map"), {
            zoom: 15,
            center: adenCoords,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: [
                {
                    featureType: "all",
                    elementType: "labels.text.fill",
                    stylers: [{ color: "#002b5c" }]
                }
            ]
        });

        const marker = new google.maps.Marker({
            position: adenCoords,
            map: map,
            title: "الهيئة العامة للأراضي والمساحة والتخطيط العمراني",
            icon: {
                url: "data:image/svg+xml;charset=UTF-8," + encodeURIComponent(`
                    <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="20" cy="20" r="18" fill="#002b5c" stroke="#ffffff" stroke-width="2"/>
                        <text x="20" y="26" font-family="Arial" font-size="16" fill="white" text-anchor="middle" font-weight="bold">ه</text>
                    </svg>
                `)
            }
        });

        const infoWindow = new google.maps.InfoWindow({
            content: `
                <div style="text-align: center; font-family: 'Tajawal', Arial, sans-serif; direction: rtl;">
                    <h3 style="color: #002b5c; margin-bottom: 10px;">الهيئة العامة للأراضي والمساحة والتخطيط العمراني</h3>
                    <p style="margin: 5px 0;">📍 عدن - الجمهورية اليمنية</p>
                    <p style="margin: 5px 0;">📞 01252590</p>
                    <p style="margin: 5px 0;">🌐 www.galsup.gov.ye</p>
                </div>
            `
        });

        marker.addListener("click", () => {
            infoWindow.open(map, marker);
        });
        
        // Show info window by default
        infoWindow.open(map, marker);
    }

    // Initialize map when page loads
    window.onload = function() {
        initMap();
    };
</script>

<!-- Google Maps API -->
<script async defer 
        src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&language=ar&region=YE">
</script>
@endpush