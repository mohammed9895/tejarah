@props(['layout', 'page' => null, 'number' => '01'])
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

    <section class="container bg-light-gray rounded-lg sticky top-0 z-30">
        <div class="flex justify-between flex-col md:flex-row">
            <a href="#speech-of-his-excellency-the-minister" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">01</h2>
                <h1 class="text-xl font-bold text-gray-700">كلمة معالي الوزير</h1>
            </a>
            <a href="#vision-and-mission" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">02</h2>
                <h1 class="text-xl font-bold text-gray-700">الرؤية والرسالة</h1>
            </a>
            <a href="#organizational-chart" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">03</h2>
                <h1 class="text-xl font-bold text-gray-700">الهيكل التنظيمي</h1>
            </a>
            <a href="#general-directorates" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">04</h2>
                <h1 class="text-xl font-bold text-gray-700">المديريات العامة</h1>
            </a>
            <a href="#ministry-specialties" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">05</h2>
                <h1 class="text-xl font-bold text-gray-700">أختصاصات الوزارة</h1>
            </a>
            <a href="#subsidiary-directorates-and-departments" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">06</h2>
                <h1 class="text-xl font-bold text-gray-700">المديريات والإدارات التابعة</h1>
            </a>
            <a href="#nazdaher" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">07</h2>
                <h1 class="text-xl font-bold text-gray-700">نزدهر</h1>
            </a>
        </div>
    </section>

    <!-- require tailwindcss for example -->
    <headless-dropdown class="relative inline-block text-left" placement="bottom-end bottom" popper>
        <div>
            <button
                aria-expanded="true"
                aria-haspopup="true"
                class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500"
                id="menu-button"
                type="button"
            >
                Dropdown
                <!-- Heroicon name: solid/chevron-down -->
                <svg aria-hidden="true" class="-mr-1 ml-2 h-5 w-5" fill="currentColor" viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                          fill-rule="evenodd" />
                </svg>
            </button>
        </div>

        <div
            aria-labelledby="menu-button"
            aria-orientation="vertical"
            class="origin-top-right absolute w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none"
            role="menu"
            tabindex="-1"
        >
            <div class="py-1" role="none">
                <a class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                   href="#account" id="menu-item-0" role="menuitem" tabindex="-1"
                >Account settings</a
                >
                <a class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                   href="#support" id="menu-item-1" role="menuitem" tabindex="-1"
                >Support</a
                >
                <a class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                   href="#license" id="menu-item-2" role="menuitem" tabindex="-1"
                >License</a
                >
                <form action="#test" method="POST" role="none">
                    <button
                        class="text-gray-700 block w-full text-left px-4 py-2 text-sm hover:bg-gray-100 focus:bg-gray-100 focus:outline-none"
                        id="menu-item-3"
                        role="menuitem"
                        tabindex="-1"
                        type="submit"
                    >
                        Sign out
                    </button>
                </form>
            </div>
        </div>
    </headless-dropdown>

    <section id="speech-of-his-excellency-the-minister" class="py-36 container">
        <div class="flex justify-between items-center">
            <div class="w-1/3 bg-primary rounded-3xl flex items-center justify-center ml-10">
                <img src="/storage/{{ $page->data['minister_image'] }}" alt="">
            </div>
            <div class="w-2/3">
                <h1 class="text-3xl font-bold mb-5">{{ $page->data['minister_message_title'] }}</h1>
                <p class="text-gray-500 leading-loose">{!! $page->data['minister_message_content'] !!}</p>
                <h3 class="font-bold mt-6">{{ $page->data['minister_name'] }}</h3>
                <h4>{{ $page->data['minister_position'] }}</h4>
            </div>
        </div>
    </section>

    <section id="vision-and-mission" class="container">
        <div class="flex">
            <div class="w-1/2">
                <div class="bg-primary rounded-lg p-6">
                    <div class="flex justify-between items-center">
                        <div
                                class=" w-28 h-28 bg-secondary text-primary text-center flex items-center justify-center text-5xl rounded-lg">
                            <i class="fa-regular fa-eye"></i>
                        </div>
                        <div class="flex-1 mr-4">
                            <h1 class="text-secondary text-3xl mb-3 font-bold">{{ $page->data['vision_title'] }}</h1>
                            <p class="text-lg text-secondary">{{ $page->data['vision_content'] }}</p>
                        </div>
                    </div>
                </div>
                <div class="bg-secondary rounded-lg mt-6 p-6">
                    <div class="flex justify-between items-center">
                        <div
                                class=" w-28 h-28 bg-primary text-secondary text-center flex items-center justify-center text-5xl rounded-lg">
                            <i class="fa-regular fa-comment"></i>
                        </div>
                        <div class="flex-1 mr-4">
                            <h1 class="text-primary text-3xl mb-3 font-bold">{{ $page->data['mission_title'] }}</h1>
                            <p class="text-md text-primary">{{ $page->data['mission_content'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 mr-6">
                <h1 class="text-primary text-3xl font-bold mb-5">قيمنا</h1>
                <div class="grid grid-cols-2 gap-8">
                    @foreach($page->data['values'] as $value)
                        <div class="flex items-center">
                            <div
                                    class="w-12 h-12 bg-secondary rounded-lg text-primary text-4xl flex items-center justify-center">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <h2 class="text-2xl mr-2 text-primary">{{ $value['value_title'] }}</h2>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="general-directorates" class="bg-gradient-to-tr from-[#E35656] to-[#9B2E2E] py-32 mt-36">
        <livewire:directorates :directorates="$page->data['directorates']"/>
    </section>

    <section id="organizational-chart" class="py-36 ">
        <div class="text-3xl relative text-gray-800 text-center font-bold mb-20">
            <h1>{{ $page->data['organizational_structure_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
        </div>
        <div class="container">
            {{ $page->data['organizational_structure_image'] }}
        </div>
    </section>

    <section id="ministry-specialties" class="py-36">
        <div class="text-3xl relative text-gray-800 text-center font-bold mb-10">
            <h1>{{ $page->data['ministry_specialties_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
        </div>
        <div class="container">
            <div class="grid grid-cols-3 gap-4">
                @foreach($page->data['specialties'] as $specialization)
                    <div class="flex items-start">
                        <div
                            class="bg-primary ml-4 text-secondary w-44 h-44 text-5xl flex items-center justify-center rounded-lg">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <div>
                            <h1 class="text-3xl text-primary font-bold mb-4">{{ $specialization['title'] }}</h1>
                            {!! $specialization['content'] !!}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="subsidiary-directorates-and-departments" class="py-36 ">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['directorates_and_departments_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>
                {{ $page->data['directorates_and_departments_description'] }}
            </p>
        </div>
        <div class="container">
            <div class="grid grid-cols-3 gap-10">
                @foreach($page->data['directorates_and_departments'] as $item)
                    <div class="bg-white shadow-2xl rounded-lg p-5">
                        <div class="border-b border-gray-200 py-8">
                            <h1 class="text-primary font-bold">{{ $item['name'] }}</h1>
                            <h3 class="text-gray-700">{{ $item['location'] }}</h3>
                        </div>
                        <div class="flex mt-5 items-center">
                            <div class="text-primary text-3xl ml-3">
                                <i class="fa-solid fa-at"></i>
                            </div>
                            <div>
                                <h4 class="text-primary">{{ $item['contact_name'] }}</h4>
                                <a href="mailto:{{ $item['contact_email'] }}" class="font-bold text-gray-500">{{ $item['contact_email'] }}</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="nazdaher" class="py-36 container">
        <div class="flex justify-between items-center">
            <div class="w-1/3 bg-primary rounded-3xl flex items-center justify-center ml-10">
                <img src="/storage/{{ $page->data['nazdaher_image'] }}" alt="">
            </div>
            <div class="w-2/3">
                <h1 class="text-3xl font-bold mb-5">{{ $page->data['nazdaher_title'] }}</h1>
                <p class="text-gray-500 leading-loose">{!!  $page->data['nazdaher_content']  !!}</p>
            </div>
        </div>
    </section>

    <section class="py-36">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['team_section_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
        </div>
        <div class="container">
            <div class="grid grid-cols-4 gap-8">
                @foreach($page->data['team'] as $member)
                    <div>
                        <div class="bg-secondary rounded-lg">
                            <img src="/storage/{{ $member['image'] }}" alt="">
                        </div>
                        <div class="mt-3">
                            <h1 class="text-primary text-lg font-bold">{{ $member['name'] }}</h1>
                            <h3 class="text-gray-700">{{ $member['position'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-dynamic-component>
