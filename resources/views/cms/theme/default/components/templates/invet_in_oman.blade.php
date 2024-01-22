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

    <x-partials.title title="{{ $page->title }}"
                      description="{{ $page->data['content'] }}"></x-partials.title>

                      <section class="container bg-light-gray/60 backdrop-blur-2xl md:rounded-lg sticky top-0 z-30 overflow-x-scroll navbar">
                        <div class="flex justify-between whitespace-nowrap nav-container">
                            <a href="#mechanism-of-action" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">01</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.mechanism_of_action') }}</h1>
                            </a>
                            <a href="#commercial-activities" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">02</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.commercial_activities') }}</h1>
                            </a>
                            <a href="#establishing-a-business" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">03</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.establishing_a_business') }}</h1>
                            </a>
                            <a href="#export_support" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">04</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.export_support') }}</h1>
                            </a>
                        </div>
                    </section>
                    


    <section class="py-36 container" id="mechanism-of-action">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['steps_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>{{ $page->data['steps_main_description'] }}</p>
        </div>

        <div class="flex justify-between items-center md:items-start flex-col md:flex-row">
            <div class="flex flex-col justify-center items-center space-y-5 flex-1">
                <div class="w-32 h-32 bg-primary rounded-2xl text-white text-6xl flex items-center justify-center">
                    <i class="fa-solid fa-user-tie"></i>
                </div>
                <h1 class="text-lg text-gray-500 text-center">{{ $page->data['step_1_title'] }}</h1>
            </div>
            <div class=""><img src="{{ asset('image/after.svg') }}" class="mt-12 -rotate-90 md:rotate-0 mb-10 md:mb-0" alt=""></div>
            <div class="flex flex-col justify-center items-center space-y-5 flex-1">
                <div class="w-32 h-32 bg-primary rounded-2xl text-white text-6xl flex items-center justify-center">
                    <i class="fa-regular fa-comment"></i>
                </div>
                <h1 class="text-lg text-gray-500 text-center">{{ $page->data['step_2_title'] }}</h1>
            </div>
            <div><img src="{{ asset('image/after.svg') }}" class="mt-12 -rotate-90 md:rotate-0 mb-10 md:mb-0" alt=""></div>
            <div class="flex flex-col justify-center items-center space-y-5 flex-1">
                <div class="w-32 h-32 bg-primary rounded-2xl text-white text-6xl flex items-center justify-center">
                    <i class="fa-regular fa-eye-slash"></i>
                </div>
                <h1 class="text-lg text-gray-500 text-center">{{ $page->data['step_3_title'] }}</h1>
            </div>
            <div><img src="{{ asset('image/after.svg') }}" class="mt-12 -rotate-90 md:rotate-0 mb-10 md:mb-0" alt=""></div>
            <div class="flex flex-col justify-center items-center space-y-5 flex-1">
                <div class="w-32 h-32 bg-primary rounded-2xl text-white text-6xl flex items-center justify-center">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
                <h1 class="text-lg text-gray-500 text-center">{{ $page->data['step_4_title'] }}</h1>
            </div>
            <div><img src="{{ asset('image/after.svg') }}" class="mt-12 -rotate-90 md:rotate-0 mb-10 md:mb-0" alt=""></div>
            <div class="flex flex-col justify-center items-center space-y-5 flex-1">
                <div class="w-32 h-32 bg-primary rounded-2xl text-white text-6xl flex items-center justify-center">
                    <i class="fa-solid fa-box-open"></i>
                </div>
                <h1 class="text-lg text-gray-500 text-center">{{ $page->data['step_5_title'] }}</h1>
            </div>
        </div>
    </section>


    <section id="commercial-activities" class="py-36 container">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['commercial_activities_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>{{ $page->data['commercial_activities_main_description'] }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
            @foreach($page->data['activities'] as $activity)
                <div class="flex flex-col items-start">
                    <div class="flex items-center w-16 h-16 justify-center bg-primary rounded-lg text-white text-2xl">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <h1 class="text-gray-800 text-lg font-bold mt-3 mb-2">{{ $activity['title'] }}</h1>
                    <p class="text-gray-400">{{ $activity['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>


    <section id="establishing-a-business" class="py-36 container">
        <div class="flex items-center flex-col md:flex-row">
            <div class="w-full mb-16 md:mb-0 md:w-1/3">
                <div
                    class="bg-secondary relative rounded-2xl py-5 flex items-center justify-center border-2 border-dashed border-primary">
                    <img src="/storage/{{ $page->data['establishing_a_business_image'] }}" class="w-[90%]" alt="">
                    <div class="absolute -bottom-3 flex ">
                        <a href="{{ $page->data['establishing_a_business_website'] }}"
                           class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                class="fa-solid fa-globe"></i></a>
                        <a href="{{ $page->data['establishing_a_business_x'] }}"
                           class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                class="fa-brands fa-x-twitter"></i></a>
                        <a href="mailto:{{ $page->data['establishing_a_business_email'] }}"
                           class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                class="fa-solid fa-at"></i></a>
                        <a href="tel:{{ $page->data['establishing_a_business_phone'] }}"
                           class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                class="fa-solid fa-phone"></i></a>
                    </div>
                </div>
            </div>
            <div class="w-full md:flex-1 mr-6">
                <div class="relative text-gray-800 text-center mb-10">
                    <h1 class="text-3xl font-bold mb-5">{{ $page->data['establishing_a_business_title']  }}</h1>
                    <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
                </div>
                <p class="text-gray-500 leading-loose">
                    {!! $page->data['establishing_a_business_description']  !!}
                </p>
                <div class="grid grid-cols-2 gap-4 mt-6">
                    @foreach($page->data['establishing_a_business_features'] as $feature)
                        <div class="flex items-center justify-start">
                            <div class="relative text-primary text-3xl">
                                <i class="fa-solid fa-check z-50 relative"></i>
                                <img class="absolute bottom-0 z-20 w-20 right-2"
                                     src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                            </div>
                            <h1 class="text-lg text-gray-800 mr-4 font-bold">{{ $feature['title'] }}</h1>
                        </div>
                    @endforeach
                </div>

                <div class="flex items-center justify-start mt-6">
                    @foreach($page->data['establishing_a_business_stats'] as $stat)
                        <div class="mr-6 text-center">
                            <div class="text-3xl text-center text-primary"
                                 style='background: url("{{ asset('image/polygon-mid-light.svg') }}"); background-size: contain; background-position: center center; background-repeat: no-repeat;'>
                                {{ $stat['number'] }}
                            </div>
                            <h3 class="text-xl font-bold">{{ $stat['title'] }}</h3>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <section class="py-36 container" id="support_exports">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3">
                <div
                    class="bg-secondary relative rounded-2xl py-5 flex items-center justify-center border-2 border-primary">
                    <img src="/storage/{{ $page->data['here_for_help_main_image'] }}" class="w-[90%]" alt="">
                </div>
            </div>
            <div class="w-full md:flex-1 mr-6 mt-16 md:mt-0">
                <div class="relative text-gray-800 text-right mb-10">
                    <h1 class="text-3xl font-bold mb-5">{{ $page->data['here_for_help_main_title'] }}</h1>
                    <div class="w-56 h-4 bg-secondary -mt-10"></div>
                </div>
                <p class="text-gray-500 leading-loose">{!! $page->data['here_for_help_main_description'] !!}</p>
                <div class="grid grid-cols-1 gap-4 mt-6">
                    @foreach($page->data['here_for_help_features'] as $feature)
                        <div class="flex items-center justify-start">
                            <div class="relative text-primary text-3xl">
                                <i class="fa-solid fa-check z-50 relative"></i>
                                <img class="absolute bottom-0 z-20 w-20 right-2"
                                     src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                            </div>
                            <h1 class="text-lg text-gray-800 mr-4 font-bold">{{ $feature['title'] }}</h1>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="py-36 container" id="support_external">
        <div class="flex flex-col md:flex-row items-center">
            <div class="w-full md:w-1/3">
                <div
                    class="bg-secondary relative rounded-2xl py-5 flex items-center justify-center border-2 border-dashed border-primary">
                    <img src="/storage/{{ $page->data['invest_in_oman_main_image'] }}" class="w-[90%]" alt="">
                </div>
            </div>
            <div class="w-full md:flex-1 mr-6 mt-16 md:mt-0">
                <div class="relative text-gray-800 text-right mb-10">
                    <h1 class="text-3xl font-bold mb-5">{{ $page->data['invest_in_oman_main_title'] }}</h1>
                    <div class="w-56 h-4 bg-secondary -mt-10"></div>
                </div>
                <p class="text-gray-500 leading-loose">{!! $page->data['invest_in_oman_main_description']  !!}</p>
                <div class="flex mt-10">
                    <a href="{{ $page->data['invest_in_oman_website'] }}"
                       class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                            class="fa-solid fa-globe"></i></a>
                    <a href="{{ $page->data['invest_in_oman_x'] }}"
                       class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                            class="fa-brands fa-x-twitter"></i></a>
                    <a href="mailto:{{ $page->data['invest_in_oman_email'] }}"
                       class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                            class="fa-solid fa-at"></i></a>
                    <a href="tel:{{ $page->data['invest_in_oman_phone'] }}"
                       class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                            class="fa-solid fa-phone"></i></a>
                </div>

            </div>
        </div>
    </section>

    <section class="bg-gradient-to-tr from-[#E35656] to-[#9B2E2E] py-32 mt-36">
        <div class="container">
            <div class="relative text-gray-800 text-right mb-10">
                <h1 class="text-3xl font-bold mb-5 text-white text-center">{{ $page->data['e_services_main_title'] }}</h1>
                <div class="w-72 h-4 bg-[#9B2E2E] -mt-10 mx-auto"></div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
               @foreach($page->data['e_services'] as $service)
                    <div class="bg-white rounded flex items-center justify-between px-5 p-10">
                        <div class="px-4 w-60">
                            <img src="/storage/{{ $service['logo'] }}" class="" alt="">
                        </div>
                        <div class="px-4 border-r border-gray-200">
                            <p>{{ $service['description'] }}</p>
                            <div class="flex mt-5">
                                <a href="{{ $service['website'] }}"
                                   class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                        class="fa-solid fa-globe"></i></a>
                                <a href="{{ $service['website'] }}"
                                   class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                        class="fa-brands fa-x-twitter"></i></a>
                                <a href="mailto:{{ $service['email'] }}"
                                   class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                        class="fa-solid fa-at"></i></a>
                                <a href="tel:{{ $service['phone'] }}"
                                   class="flex items-center justify-center bg-primary text-white rounded w-10 h-10 ml-2"><i
                                        class="fa-solid fa-phone"></i></a>
                            </div>
                        </div>
                    </div>
               @endforeach
            </div>
        </div>
    </section>

    <section class="py-36">
        <div class="container bg-secondary rounded-3xl flex flex-col md:flex-row items-center justify-between p-10">
            <div class="w-full md:w-1/3 relative">
                <img src="{{ asset('image/contact.svg') }}" class="rounded" alt="">
                <img src="{{ asset('image/arrow.svg') }}" class="absolute -top-10 -right-10 w-36" alt="">
            </div>
            <div class="w-full md:flex-1 mr-6 mt-16 md:mt-0">
                <h1 class="text-primary text-3xl font-bold">التواصل مع مستشار علاقات الاستثمار</h1>
                <p class="text-md text-gray-800 mt-3">يمكنك التواصل مع مدير علاقات الاستثمار من فريقنا للحصول على الدعم
                    والمشورة المناسبين لاحتياجاتك. يمكنك إرسال استفساراتك إلى عنوان البريد الإلكتروني
                    invest@tejarah.gov.om أو ملء استمارة التواصل أدناه وسيتم التواصل معك.</p>
                <form action="">
                    <div class="flex mt-5">
                        <button class="p-3 text-xl text-white bg-primary rounded-lg">
                            <i class="fa-solid fa-money-bill-wave"></i>
                            أستثمار
                        </button>
                        <button class="p-3 text-xl text-primary bg-white rounded-lg mr-3">
                            <i class="fa-regular fa-handshake"></i>
                            علاقات
                        </button>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-7">
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                الاسم الأول
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                اسم العائلة
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                البريد الإلكتروني *
                            </label>
                            <input type="email" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                تأكيد البريد الإلكتروني *
                            </label>
                            <input type="email" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                الاسم الأولرقم الهاتف *
                            </label>
                            <input type="tel" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                اسم الشركة
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                عنوان النشاط التجاري
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                   style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                أنا مهتم بـ
                            </label>
                            <div class="relative">
                                <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none"
                                       style="box-shadow: 0px 2px 0px #9B2E2E;">
                                <button class="p-4 bg-primary rounded-lg text-white absolute top-2 left-2">
                                    <i class="fa-regular fa-paper-plane"></i>
                                    أرسال
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</x-dynamic-component>
