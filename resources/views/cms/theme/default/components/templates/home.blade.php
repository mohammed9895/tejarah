@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */


    $blogs = \SolutionForest\FilamentCms\Support\Utils::getContentType('blogs')->paginate($page->data['number_of_posts'] ?? 3);

    $theme = FilamentCms::getCurrentTheme();
@endphp


<x-dynamic-component
        component="filament-cms::{{$theme}}.page"
        :layout="$layout">

    <section
            class="bg-gradient-to-b from-primary/20 to-white py-48 {{ $pb ?? 'pb-48' }} text-center w-full mt-[-132px] absolute">
    </section>

    <div class="container">
        <section class="bg-light-gray rounded-2xl relative">

            <div class="owl-carousel rounded-2xl">
                <div class="item rounded-2xl flex items-center justify-start p-10 h-[500px] md:h-[800px] w-full"
                     style="background: url('/storage/{{ $page->data['slider_1_image'] }}'); background-size: cover; background-position: center center;">
                    <div class="w-full md:w-2/3 z-50">
                        <h1 class="text-3xl md:text-5xl font-bold text-white md:leading-relaxed">{{ $page->data['slider_1_title'] }}</h1>
                        <p class="text-white mt-2 md:mt-5">{{ $page->data['slider_1_description'] }}</p>
                        <div class="flex mt-2 md:mt-5">
                            <a href="{{ $page->data['slider_1_primary_button_link'] }}"
                               class="bg-primary text-white p-3 rtl:ml-3 ltr:mr-3 rounded-md">{{ $page->data['slider_1_primary_button_text'] }}</a>
                            <a href="{{ $page->data['slider_1_secondary_button_link'] }}"
                               class="bg-secondary text-primary p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_1_secondary_button_text'] }}</a>
                        </div>
                    </div>
                    <div class=" absolute top-0 left-0 w-full h-full bg-black/40 rounded-2xl z-30">
                    </div>
                </div>
                <div class="item rounded-2xl flex items-center justify-start p-10 h-[500px] md:h-[800px] w-full"
                     style="background: url('/storage/{{ $page->data['slider_2_image'] }}'); background-size: cover; background-position: center center;">
                    <div class="w-full md:w-2/3 z-50">
                        <h1 class="text-3xl md:text-5xl font-bold text-white md:leading-relaxed">{{ $page->data['slider_2_title'] }}</h1>
                        <p class="text-white mt-2 md:mt-5">{{ $page->data['slider_2_description'] }}</p>
                        <div class="flex mt-2 md:mt-5">
                            <a href="{{ $page->data['slider_2_primary_button_link'] }}"
                               class="bg-primary text-white p-3 rtl:ml-3 ltr:mr-3 rounded-md">{{ $page->data['slider_2_primary_button_text'] }}</a>
                            <a href="{{ $page->data['slider_2_secondary_button_link'] }}"
                               class="bg-secondary text-primary p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_2_secondary_button_text'] }}</a>
                        </div>
                    </div>
                    <div class=" absolute top-0 left-0 w-full h-full bg-black/40 rounded-2xl z-30">
                    </div>
                </div>
                <div class="item rounded-2xl flex items-center justify-start p-10 h-[500px] md:h-[800px] w-full"
                     style="background: url('/storage/{{ $page->data['slider_3_image'] }}'); background-size: cover;  background-position: center center;">
                    <div class="w-full md:w-2/3 z-50">
                        <h1 class="text-3xl md:text-5xl font-bold text-white md:leading-relaxed">{{ $page->data['slider_3_title'] }}</h1>
                        <p class="text-white mt-2 md:mt-5">{{ $page->data['slider_3_description'] }}</p>
                        <div class="flex mt-2 md:mt-5">
                            <a href="{{ $page->data['slider_3_primary_button_link'] }}"
                               class="bg-primary text-white p-3 rtl:ml-3 ltr:mr-3 rounded-md">{{ $page->data['slider_3_primary_button_text'] }}</a>
                            <a href="{{ $page->data['slider_3_secondary_button_link'] }}"
                               class="bg-secondary text-primary p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_3_secondary_button_text'] }}</a>
                        </div>
                    </div>
                    <div class=" absolute top-0 left-0 w-full h-full bg-black/40 rounded-2xl z-30">
                    </div>
                </div>
            </div>

        </section>

        <section class="w-full mx-auto flex p-6 bg-secondary mt-16 md:mt-32 rounded-3xl flex-col md:flex-row sultan"
                 style="box-shadow: 19px 19px 0px #C54139;">
            <div class="w-full md:w-1/3 mb-6 md:mb-0 bg-primary rounded-2xl flex items-center justify-center">
                <img src="{{ asset('image/Haitham-binTariq-AlSaid-min.svg') }}" alt="">
            </div>
            <div class="flex flex-col items-center justify-center w-full md:w-2/3">
                <div class="ltr:hidden text-center flex flex-col items-center">
                    <img src="{{ asset('image/Group 197.svg') }}" class="mb-7" alt="">
                    <h1 class="text-4xl text-gray-700 text-center">لمولانا حضرة صاحب الجلالة السلطان</h1>
                    <h1 class="text-4xl text-primary font-bold mt-5 text-center">هيثم بن طارق المعظم - حفظة الله ورعاه</h1>
                    <img src="{{ asset('image/Group 199.svg') }}" class="mt-10" alt="">
                    <h1 class="text-2xl text-primary font-bold mt-5 text-center">ونعاهد جلالة السلطان المعظم بالعمل الجاد في
                        خدمة عُمان وشعبها الأبي في ظل القيادة الحكيمة</h1>
                </div>
                <div class="rtl:hidden">
                    <h1 class="text-3xl text-gray-700 text-center">It is a great honour and matter of immense pride to receive praise from</h1>
                    <h1 class="text-4xl text-primary font-bold mt-5 text-center">His Majesty Sultan Haitham bin Tarik</h1>
                    <div class="w-[90%] h-4 bg-[#ffe1da] mx-auto -mt-6"></div>
                    <h1 class="text-3xl text-gray-700 text-center mt-5">on the success of our efforts to enhance Oman's business environment</h1>
                </div>
            </div>
        </section>

        <section class="mt-32">
            <div class="w-full md:w-2/3 mx-auto text-center">
                <h1 class="text-5xl font-bold text-gray-700">{{ $page->data['supporting_main_title'] }}</h1>
                <p class="mt-5">{{ $page->data['supporting_main_description'] }}</p>
                <div class="flex flex-col mt-6">
                    @foreach($page->data['sites'] as $site)

                        <a class="relative mb-10 group inline-block" href="{{ $site['link'] }}" target="_blank">
                            <div
                                    class="flex items-center flex-col justify-center md:flex-row p-10 bg-light-gray rounded-2xl group-hover:bg-gradient-to-r group-hover:from-[{{ $site['starting_color'] }}] group-hover:to-[{{ $site['ending_color'] }}]">
                                <div class="bg-white rounded-lg p-10 mr-4 rtl:mr-0 rtl:ml-4">
                                    <img src="/storage/{{ $site['logo'] }}" class="w-28" alt="">
                                </div>
                                <div class="text-center md:text-left md:rtl:text-right mt-4">
                                    <h1 class="text-3xl font-bold text-[{{ $site['starting_color'] }}] group-hover:text-white"
                                       >{{ $site['title'] }}</h1>
                                    <p class="text-lg text-gray-500 mt-3 group-hover:text-white">{{ $site['description'] }}</p>
                                </div>
                                <div class="block md:hidden bg-[{{ $site['starting_color'] }}] mt-3 w-full text-white p-3 rounded">
                                    <i class="fa-regular fa-paper-plane"></i>
                                    {{ __('global.visit_now') }}
                                </div>
                            </div>
                            <div class="absolute hidden top-1/2 rtl:left-1 right-0 rtl:right-auto transform translate-x-1/2 rtl:-translate-x-1/2 -translate-y-1/2
 w-24 h-24 rounded-full bg-white shadow text-[{{ $site['starting_color'] }}] text-5xl leading-[96px] text-center md:group-hover:block"
                                 style="color: {{ $site['starting_color'] }};">
                                <i class="fa-regular fa-paper-plane"></i>
                            </div>

                        </a>
                    @endforeach
                </div>
            </div>
        </section>
        <section class="mt-32">
            <div class="w-full mx-auto text-center mb-10 animate__animated hover:animate__shakeX">
                <h1 class="text-5xl font-bold text-gray-700">{{ $page->data['media_title'] }}</h1>
                <p class="mt-5">{{ $page->data['media_description'] }}</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
               <x-blogs :blogs="$blogs" />
            </div>
        </section>
    </div>
</x-dynamic-component>
