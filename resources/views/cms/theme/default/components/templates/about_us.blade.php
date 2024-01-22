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
                      <section class="container bg-light-gray/60 backdrop-blur-2xl md:rounded-lg sticky top-0 z-30 overflow-x-scroll navbar">
                        <div class="flex justify-between whitespace-nowrap nav-container">
                            <a href="#speech-of-his-excellency-the-minister" class="flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">01</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.speech_of_the_minister') }}</h1>
                            </a>
                            <a href="#vision-and-mission" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">02</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.vision_and_mission') }}</h1>
                            </a>
                            <a href="#organizational-chart" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">03</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.organizational_chart') }}</h1>
                            </a>
                            <a href="#general-directorates" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">04</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.general_directorates') }}</h1>
                            </a>
                            <a href="#ministry-specialties" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">05</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.ministry_specialties') }}</h1>
                            </a>
                            <a href="#subsidiary-directorates-and-departments" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                                <h2 class="text-gray-500 mb-4">06</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.subsidiary_directorates_and_departments') }}</h1>
                            </a>
                            <a href="#nazdaher" class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5 pl-5">
                                <h2 class="text-gray-500 mb-4">07</h2>
                                <h1 class="text-xl font-bold text-gray-700">{{ __('messages.nazdaher') }}</h1>
                            </a>
                        </div>
                    </section>


    <section id="speech-of-his-excellency-the-minister" class="py-36 container">
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="w-full md:w-1/3 mx-auto bg-primary rounded-3xl flex items-center justify-center ml-10">
                <img src="/storage/{{ $page->data['minister_image'] }}" alt="">
            </div>
            <div class="w-full mt-10 md:w-2/3">
                <h1 class="text-3xl font-bold mb-5">{{ $page->data['minister_message_title'] }}</h1>
                <p class="text-gray-500 leading-loose">{!! $page->data['minister_message_content'] !!}</p>
                <h3 class="font-bold mt-6">{{ $page->data['minister_name'] }}</h3>
                <h4>{{ $page->data['minister_position'] }}</h4>
            </div>
        </div>
    </section>

    <section id="vision-and-mission" class="container">
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2">
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
            <div class="flex-1 mt-10 md:mr-6 ">
                <h1 class="text-primary text-3xl font-bold mb-5"> {{__('messages.values')}} </h1>
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
            <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                @foreach($page->data['specialties'] as $specialization)
                    <div class="flex items-start flex-col md:flex-row">
                        <div
                            class="bg-primary ml-4 text-secondary w-20 h-20 md:w-44 md:h-44 text-2xl mb-2 md:mb-0 md:text-5xl flex items-center justify-center rounded-lg">
                            <i class="fa-solid fa-boxes-stacked"></i>
                        </div>
                        <div class="flex-1">
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
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
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
        <div class="flex flex-col md:flex-row justify-between items-center">
            <div class="w-full md:w-1/3 mx-auto bg-primary rounded-3xl flex items-center justify-center ml-10">
                <img src="/storage/{{ $page->data['nazdaher_image'] }}" alt="">
            </div>
            <div class="w-full mt-10 md:mt-0 md:w-2/3">
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
            <div class="grid grid-cols-2fmldkjhdjhgd kljsjks kfj jd okmdpo ,dl; l;dms pos lkjflkjfklfjklfj md:grid-cols-4 gap-8">
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
