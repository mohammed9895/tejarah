@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */

    $theme = FilamentCms::getCurrentTheme();
@endphp


<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">

    <style>
        .slider-container input[type=radio] {
            display: none;
        }

        .card {
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            right: 0;
            margin: auto;
            transition: transform 0.4s ease;
            cursor: pointer;
        }

        .slider-container {
            width: 100%;
            max-width: 800px;
            max-height: 600px;
            height: 100%;
            transform-style: preserve-3d;
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
        }

        .slider-container .cards {
            position: relative;
            width: 100%;
            height: 100%;
            margin-bottom: 20px;
        }

        .slider-container  img {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            -o-object-fit: cover;
            object-fit: cover;
        }

        .slider-container #item-1:checked ~ .cards #song-3, #item-2:checked ~ .cards #song-1, #item-3:checked ~ .cards #song-2 {
            transform: translateY(-40%) scale(0.8);
            opacity: 0.4;
            z-index: 0;
        }

        .slider-container #item-1:checked ~ .cards #song-2, #item-2:checked ~ .cards #song-3, #item-3:checked ~ .cards #song-1 {
            transform: translateY(40%) scale(0.8);
            opacity: 0.4;
            z-index: 0;
        }

        @media (max-width: 768px) {
            .slider-container #item-1:checked ~ .cards #song-3, #item-2:checked ~ .cards #song-1, #item-3:checked ~ .cards #song-2 {
                transform: translateX(-40%) scale(0.8);
                opacity: 0.4;
                z-index: 0;
            }

            .slider-container #item-1:checked ~ .cards #song-2, #item-2:checked ~ .cards #song-3, #item-3:checked ~ .cards #song-1 {
                transform: translateX(40%) scale(0.8);
                opacity: 0.4;
                z-index: 0;
            }
        }

        .slider-container #item-1:checked ~ .cards #song-1, #item-2:checked ~ .cards #song-2, #item-3:checked ~ .cards #song-3 {
            transform: translatex(0) scale(1);
            opacity: 1;
            z-index: 1;
        }
        .slider-container #item-1:checked ~ .cards #song-1 img, #item-2:checked ~ .cards #song-2 img, #item-3:checked ~ .cards #song-3 img {
            box-shadow: 0px 0px 5px 0px rgba(81, 81, 81, 0.47);
        }

        .slider-container .player {
            background-color: #fff;
            border-radius: 8px;
            min-width: 320px;
            padding: 16px 10px;
        }

        .slider-container .upper-part {
            position: relative;
            display: flex;
            align-items: center;
            margin-bottom: 12px;
            height: 36px;
            overflow: hidden;
        }

        .slider-container .play-icon {
            margin-right: 10px;
        }

        .slider-container .song-info {
            width: calc(100% - 32px);
            display: block;
        }

        .slider-container .song-info .title {
            color: #403d40;
            font-size: 14px;
            line-height: 24px;
        }

        .slider-container .sub-line {
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .slider-container .subtitle, .time {
            font-size: 12px;
            line-height: 16px;
            color: #c6c5c6;
        }

        .slider-container .time {
            font-size: 12px;
            line-height: 16px;
            color: #a5a5a5;
            font-weight: 500;
            margin-left: auto;
        }

        .slider-container .progress-bar {
            height: 3px;
            width: 100%;
            background-color: #e9efff;
            border-radius: 2px;
            overflow: hidden;
        }

        .slider-container .progress {
            display: block;
            position: relative;
            width: 100%;
            height: 100%;
            background-color: #2992dc;
            border-radius: 6px;
        }

        .slider-container .info-area {
            width: 100%;
            position: absolute;
            top: 0;
            left: 30px;
            transition: transform 0.4s ease-in;
        }

        .slider-container #item-2:checked ~ .player #test {
            transform: translateY(0);
        }

        .slider-container #item-2:checked ~ .player #test {
            transform: translateY(-40px);
        }

        .slider-container #item-3:checked ~ .player #test {
            transform: translateY(-80px);
        }


        .list-of-content ul {
            list-style-image: url('/public/image/list-dot.svg');
        }

        .list-of-content ul li {
            margin-bottom: 20px;
        }

    </style>

    <div class="container">
        <section class="container flex items-center bg-light-gray rounded-2xl p-10 md:py-20 overflow-hidden md:overflow-visible">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-8">
                <div class="info order-2 md:order-1">
                    <div id="info-1" class="">
                        <h1 class="text-gray-900 text-3xl md:text-5xl font-bold mb-2 md:mb-5 leading-relaxed">{{ $page->data['slider_1_title'] }}</h1>
                        <p class="mb-5">{{ $page->data['slider_1_description'] }}</p>
                        <div class="flex">
                            <a href="{{ $page->data['slider_1_primary_button_link'] }}"
                               class="bg-dark-gray text-white p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_1_primary_button_text'] }}</a>
                            <a href="{{ $page->data['slider_1_secondary_button_link'] }}"
                               class="bg-mid-gray text-dark-gray p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_1_secondary_button_text'] }}</a>
                        </div>
                    </div>
                    <div id="info-2" class="hidden">
                        <h1 class="text-gray-900 text-3xl md:text-5xl font-bold mb-2 md:mb-5 leading-relaxed">{{ $page->data['slider_2_title'] }}</h1>
                        <p class="mb-5">{{ $page->data['slider_2_description'] }}</p>
                        <div class="flex">
                            <a href="{{ $page->data['slider_2_primary_button_link'] }}"
                               class="bg-dark-gray text-white p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_2_primary_button_text'] }}</a>
                            <a href="{{ $page->data['slider_2_secondary_button_link'] }}"
                               class="bg-mid-gray text-dark-gray p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_2_secondary_button_text'] }}</a>
                        </div>
                    </div>
                    <div id="info-3" class="hidden">
                        <h1 class="text-gray-900 text-3xl md:text-5xl font-bold mb-2 md:mb-5 leading-relaxed">{{ $page->data['slider_3_title'] }}</h1>
                        <p class="mb-5">{{ $page->data['slider_3_description'] }}</p>
                        <div class="flex">
                            <a href="{{ $page->data['slider_3_primary_button_link'] }}"
                               class="bg-dark-gray text-white p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_3_primary_button_text'] }}</a>
                            <a href="{{ $page->data['slider_3_secondary_button_link'] }}"
                               class="bg-mid-gray text-dark-gray p-3 rtl:ml-3 rounded-md">{{ $page->data['slider_3_secondary_button_text'] }}</a>
                        </div>
                    </div>
                    <div class="flex items-center mt-6 space-x-5 rtl:space-x-reverse">
                        <a href="#"><img src="{{ asset('image/InvestOmanv1_1.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('image/OBF.svg') }}" alt=""></a>
                        <a href="#"><img src="{{ asset('image/investeasy.svg') }}" width="150" alt=""></a>
                    </div>
                </div>
                <div class="slider-container order-1 md:order-2">
                    <input type="radio" name="slider" id="item-1" checked>
                    <input type="radio" name="slider" id="item-2">
                    <input type="radio" name="slider" id="item-3">
                    <div class="cards" style="height: 300px">
                        <label class="card" for="item-1" id="song-1">
                            <img
                                src="/storage/{{ $page->data['slider_1_image'] }}"
                                alt="song">
                        </label>
                        <label class="card" for="item-2" id="song-2">
                            <img
                                src="/storage/{{ $page->data['slider_2_image'] }}"
                                alt="song">
                        </label>
                        <label class="card" for="item-3" id="song-3">
                            <img
                                src="/storage/{{ $page->data['slider_3_image'] }}"
                                alt="song">
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-full mx-auto flex p-6 bg-secondary mt-32 rounded-3xl flex-col md:flex-row"
                 style="box-shadow: 19px 19px 0px #C54139">
            <div class="w-full md:w-1/3 mb-6 md:mb-0 bg-primary rounded-2xl flex items-center justify-center">
                <img src="{{ asset('image/Haitham-binTariq-AlSaid-min.svg') }}" alt="">
            </div>
            <div class="flex flex-col items-center justify-center w-full md:w-2/3">
                <img src="{{ asset('image/Group 197.svg') }}" class="mb-7" alt="">
                <h1 class="text-4xl text-gray-700 text-center">لمولانا حضرة صاحب الجلالة السلطان</h1>
                <h1 class="text-4xl text-primary font-bold mt-5 text-center">هيثم بن طارق المعظم - حفظة الله ورعاه</h1>
                <img src="{{ asset('image/Group 199.svg') }}" class="mt-10" alt="">
                <h1 class="text-2xl text-primary font-bold mt-5 text-center">ونعاهد جلالة السلطان المعظم بالعمل الجاد في
                    خدمة عُمان وشعبها الأبي في ظل القيادة الحكيمة</h1>
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
                                class="flex items-center p-10 bg-light-gray rounded-2xl group-hover:bg-gradient-to-r group-hover:from-[{{ $site['starting_color'] }}] group-hover:to-[{{ $site['ending_color'] }}]">
                                <div class="bg-white rounded-lg p-10 ml-4">
                                    <img src="/storage/{{ $site['logo'] }}" class="w-28" alt="">
                                </div>
                                <div class="text-right">
                                    <h1 class="text-3xl font-bold text-[{{ $site['starting_color'] }}] group-hover:text-white" style="color: {{ $site['starting_color'] }};">{{ $site['title'] }}</h1>
                                    <p class="text-lg text-gray-500 mt-3 group-hover:text-white">{{ $site['description'] }}</p>
                                </div>
                            </div>
                            <div class="absolute hidden top-1/2 left-1 transform -translate-x-1/2 -translate-y-1/2
 w-24 h-24 rounded-full bg-white shadow text-[{{ $site['starting_color'] }}] text-5xl leading-[96px] text-center group-hover:block" style="color: {{ $site['starting_color'] }};">
                                <i class="fa-regular fa-paper-plane"></i>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
</x-dynamic-component>
