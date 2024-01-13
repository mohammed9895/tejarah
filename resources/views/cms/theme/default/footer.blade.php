
@php
    $menu = \SolutionForest\FilamentCms\Facades\FilamentCms::getNavigation('footer') ?? [];
@endphp
<section class="relative">
    <div class="w-full md:w-2/3 container px-10 py-96 flex items-center justify-center before:content-[''] before:w-full md:before:w-1/2 before:absolute before:top-1/2 md:before:right-0 before:bottom-0 before:left-1/2 before:transform before:-translate-x-1/2 before:-translate-y-1/2 before:bg-secondary md:before:rotate-[2deg] before:rounded-3xl before:-z-20
        after:content-[''] after:w-full md:after:w-1/2 after:absolute after:top-1/2 md:after:right-0 after:bottom-0 after:left-1/2 after:transform after:-translate-x-1/2 after:-translate-y-1/2 after:bg-primary md:after:rotate-[-2deg] after:rounded-3xl
         after:-z-10">
        <div>
            <h1 class="text-center text-white font-bold text-4xl">أشترك في القائمة البريدية  <br>
                ليصلك جديد الأخبار والفعاليات</h1>
            <div class="mt-6 relative">
                <input type="text" placeholder="البريد الإلكتروني" class="placeholder-gray-500 w-full p-5 rounded-lg">
                <button class="absolute left-2 top-2 bg-primary rounded-lg text-white py-3 px-6">أشترك<i class="fa-regular fa-paper-plane"></i></button>
            </div>
        </div>
    </div>
</section>
<footer class="relative bg-light-gray pt-48 -mt-80 -z-50">
    <div class="container flex justify-between items- flex-col md:flex-row space-y-5">
        <div class="w-1/3">
            <a href="/"><img src="{{ asset('image/logo.svg') }}" alt=""></a>
            <p class="text-gray-600 mt-3">وزارة التجارة والصناعة وترويج الاستثمار, PO Box 550, مسقط 100,سلطنة عمان</p>
            <div class="flex space-x-3 space-x-reverse mt-3">
                <a href="#" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-twitter"></i></a>
                <a href="#" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-youtube"></i></a>
            </div>
        </div>
        <div class="">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">من نحن</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="#">المديريات العام</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">المديريات والإدارات التابعة</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">نزدهر</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">خدماتنا</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="#">دليل الحوافز الاستثمارية</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">الدليل الاسترشادي لخدماتنا</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">نزدهر</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">روابط مهمه</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="#">الاخبار</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">بنك المعلومات</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">الأسئلة الشاعة</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">الارشيف</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">أتصل بنا</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="#">+968 80000070</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">info@tejarah.gov.om</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="#">ask@tejarah.gov.om</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="py-6 items-center border-t border-gray-300 mt-6">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-600">جميع الحقوق محفوظة لصالح وزارة التجارة وترويج الأستثمار</p>
                </div>
                <div class="flex space-x-3 space-x-reverse">
                    <a href="#">الشروط والأحكام</a>
                    <a href="#">سياسة الخصوصية</a>
                </div>
            </div>
        </div>
    </div>
</footer>

