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
            <a href="#2024_vision"
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                <h2 class="text-gray-500 mb-4">01</h2>
                <h1 class="text-xl font-bold text-gray-700">رؤية عُمان 2040</h1>
            </a>
            <a href="#featurs" -
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                <h2 class="text-gray-500 mb-4">02</h2>
                <h1 class="text-xl font-bold text-gray-700">المزايا التنافسية في سلطنة عُمان</h1>
            </a>
            <a href="#success-framework"
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-5">
                <h2 class="text-gray-500 mb-4">03</h2>
                <h1 class="text-xl font-bold text-gray-700">إطار النجاح</h1>
            </a>
            <a href="#investor-residency-program"
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent ml-10 pl-6">
                <h2 class="text-gray-500 mb-4">04</h2>
                <h1 class="text-xl font-bold text-gray-700">برنامج إقامة مستثمر</h1>
            </a>
        </div>
    </section>

    <section class="py-36 container" id="2024_vision">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['2024_vision_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>{{ $page->data['2024_vision_main_description'] }}</p>
        </div>

        <div class="container">
            <div x-data="{
        downloadCounterTarget: '2654071',
        githubStarsCounterTarget: '11043',
    }" class="mx-auto w-full max-w-screen-lg overflow-x-clip px-5 pt-20">
                <div x-data="{
            downloadCounter: { val: reducedMotion ? downloadCounterTarget : 1 },
            githubStarsCounter: {
                val: reducedMotion ? githubStarsCounterTarget : 1,
            },
        }" x-init="
            () => {
                if (reducedMotion) return
                gsap.timeline({
                    scrollTrigger: {
                        trigger: $refs.speedometer,
                        start: 'top bottom-=200px',
                    },
                })
                    .fromTo(
                        $refs.inner_circle,
                        {
                            autoAlpha: 0,
                            scale: 1.5,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.6',
                    )
                    .fromTo(
                        $refs.middle_circle,
                        {
                            autoAlpha: 0,
                            scale: 1.5,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.6',
                    )
                    .fromTo(
                        $refs.outer_circle,
                        {
                            autoAlpha: 0,
                            scale: 1.5,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.6',
                    )
                    .fromTo(
                        $refs.speedometer_circle,
                        {
                            autoAlpha: 0,
                            scale: 1.5,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.6',
                    )
                    .fromTo(
                        $refs.speed_lines.querySelectorAll('path'),
                        {
                            autoAlpha: 0,
                            scale: 5,
                        },
                        {
                            autoAlpha: 1,
                            scale: 1,
                            duration: 0.4,
                            ease: 'power4.out',
                            stagger: 0.03,
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.speedometer_circle.querySelectorAll('.tall-link-wrapper'),
                        {
                            autoAlpha: 0,
                            x: 50,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.6,
                            ease: 'circ.out',
                            stagger: 0.15,
                        },
                        '<0.4',
                    )
                    .fromTo(
                        $refs.fade_arc,
                        {
                            clipPath: 'polygon(0 0, 0 0, 100% 0, 0 0)',
                        },
                        {
                            clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
                            duration: 0.2,
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.orange_arc,
                        {
                            clipPath: 'polygon(0 0, 100% 0, 100% 0, 0 0)',
                        },
                        {
                            clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0 100%)',
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '>-0.05',
                    )
                    .fromTo(
                        $refs.tall_stack_description,
                        {
                            autoAlpha: 0,
                            x: -30,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 1,
                            ease: 'circ.out',
                        },
                        '<0.3',
                    )
                    .fromTo(
                        $refs.downloads,
                        {
                            autoAlpha: 0,
                            x: -30,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<0.3',
                    )
                    .to(
                        downloadCounter,
                        {
                            val: downloadCounterTarget,
                            duration: 1.5,
                            roundProps: 'val',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.github_stars,
                        {
                            autoAlpha: 0,
                            x: -30,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<0.2',
                    )
                    .to(
                        githubStarsCounter,
                        {
                            val: githubStarsCounterTarget,
                            duration: 1.5,
                            roundProps: 'val',
                        },
                        '<',
                    )
                    .fromTo(
                        $refs.orange_speed_decoration,
                        {
                            autoAlpha: 0,
                            x: -30,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<0.3',
                    )
                    .fromTo(
                        $refs.gray_speed_decoration,
                        {
                            autoAlpha: 0,
                            x: -50,
                        },
                        {
                            autoAlpha: 1,
                            x: 0,
                            duration: 0.7,
                            ease: 'circ.out',
                        },
                        '<0.2',
                    )
            }
        ">
                    <div x-ref="speedometer" class="relative min-[630px]:grid">


                        <div x-ref="outer_circle"
                             class="hidden h-[50rem] w-[50rem] self-center justify-self-center rounded-full ring-1 ring-[#F1E3E3]/40 [grid-area:1/-1] min-[800px]:block"
                             style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                        <div x-ref="middle_circle"
                             class="hidden h-[40rem] w-[40rem] self-center justify-self-center rounded-full ring-1 ring-[#F1E3E3]/60 [grid-area:1/-1] min-[700px]:block"
                             style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>
                        <div x-ref="inner_circle"
                             class="hidden h-[30rem] w-[30rem] self-center justify-self-center rounded-full ring-1 ring-[#F1E3E3]/80 [grid-area:1/-1] min-[700px]:block"
                             style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;"></div>

                        <div x-ref="speedometer_circle"
                             class="absolute right-1/2 top-32 hidden h-[18rem] w-[18rem] translate-x-1/3 self-center justify-self-center rounded-full bg-gradient-to-bl from-[#E35656]/20 to-[#FFFFFF]/0 min-[630px]:block min-[700px]:relative min-[700px]:right-0 min-[700px]:top-0 min-[700px]:translate-x-0 min-[700px]:[grid-area:1/-1]"
                             style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">


                            <div class="tall-link-wrapper group/tall-link absolute -right-36 -top-16 z-20"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <a href="#" target="_blank"
                                   class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1 motion-reduce:transition-none motion-reduce:group-hover/tall-link:transform-none">

                                    <div class="flex items-end">
                                        <span
                                            class="relative -left-0.5 text-lg transition duration-500 motion-reduce:transition-none">
                               {{ $page->data['first_axis'] }}
                            </span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="tall-link-wrapper group/tall-link absolute -right-[11.5rem] top-7 z-20"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <a href="https://alpinejs.dev" target="_blank"
                                   class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1 motion-reduce:transition-none motion-reduce:group-hover/tall-link:transform-none">
                                    <div class="flex items-end gap-px">
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                            {!!  $page->data['second_axis']  !!}
                                        </span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"/>
                                    </svg>
                                </a>
                            </div>

                            <div class="tall-link-wrapper group/tall-link absolute -right-52 top-[8.5rem] z-20"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <a href="https://laravel.com" target="_blank"
                                   class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1 motion-reduce:transition-none motion-reduce:group-hover/tall-link:transform-none">

                                    <div class="flex items-end gap-px">
                                        <span
                                            class="text-lg transition text-center duration-500 motion-reduce:transition-none">
                                            {!!  $page->data['thread_axis']  !!}
                                        </span>
                                    </div>

                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"/>
                                    </svg>

                                </a>
                            </div>

                            <div class="tall-link-wrapper group/tall-link absolute -right-[10rem] top-64 z-20"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <a href="https://livewire.laravel.com" target="_blank"
                                   class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1 motion-reduce:transition-none motion-reduce:group-hover/tall-link:transform-none">
                                    <div class="flex items-end gap-px">
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                           {{ $page->data['fourth_axis'] }}
                                        </span>
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"/>
                                    </svg>
                                </a>
                            </div>
                            <svg x-ref="orange_arc" width="64"
                                 class="absolute right-[0rem] top-[1.2rem] z-20 -rotate-[3deg]" height="204" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 style="clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                                <path
                                    d="M38.922 201.284A162.725 162.725 0 0 0 55.179 77.807C49.648 57.166 40.5 40.5 27.096 24.5 20.5 17.5 10 7.5 2.5 2.5"
                                    stroke="#C54139" stroke-width="5" stroke-linecap="round"></path>
                            </svg>

                            <svg x-ref="fade_arc" width="28"
                                 class="absolute -top-[3.2rem] right-[7.2rem] -rotate-[92deg]" height="129" fill="none"
                                 xmlns="http://www.w3.org/2000/svg"
                                 style="clip-path: polygon(0px 0px, 100% 0px, 100% 100%, 0px 100%);">
                                <path d="M19.179 2.807A162.722 162.722 0 0 1 2.923 126.284" stroke="url(#a)"
                                      stroke-width="5" stroke-linecap="round"></path>
                                <defs>
                                    <linearGradient id="a" x1="4" y1="129.5" x2="-51.33" y2="73.589"
                                                    gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#F1E3E3"></stop>
                                        <stop offset="1" stop-color="#F1E3E3" stop-opacity="0"></stop>
                                    </linearGradient>
                                </defs>
                            </svg>

                            <svg x-ref="speed_lines" class="absolute -right-16 -top-16 w-72 rotate-2" width="311"
                                 height="333" viewBox="0 0 311 333" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.5657 39.2978L1.02603 32.2428" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="1.0260299444198608 32.242801666259766"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M21.0291 32.4878L18.0974 25.1593" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="18.097400665283203 25.159299850463867"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M38.3956 26.6808L36.0169 19.1546" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="36.01689910888672 19.154600143432617"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M56.1667 22.3201L55.1266 14.4958" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="55.1265983581543 14.495800018310547"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M73.0567 21.2073L72.7763 13.3191" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="72.77629852294922 13.319100379943848"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M90.426 19.2023V1.55276" stroke="#F1E3E3" stroke-width="2"
                                      stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="90.4260025024414 1.5527600049972534"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M106.899 20.379L108.076 12.1426" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="106.89900207519531 12.142600059509277"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M124.832 22.7794L126.635 15.095" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="124.83200073242188 15.095000267028809"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M142.198 26.7314L144.568 19.2024" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="142.197998046875 19.20240020751953"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M158.671 32.0909L161.024 25.0856" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="158.67100524902344 25.085599899291992"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M173.967 38.7672L177.497 32.1453" stroke="#F1E3E3" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="173.9669952392578 32.145301818847656"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M190.44 47.4417L199.853 32.1454" stroke="#C54139" stroke-width="2"
                                      stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="190.44000244140625 32.14540100097656"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M204.129 57.0277L208.582 49.9995" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="204.12899780273438 49.9995002746582"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M219.497 66.5752L224.295 60.3074" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="219.4969940185547 60.30739974975586"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M231.622 79.2213L236.872 73.3276" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="231.6219940185547 73.32759857177734"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M243.389 91.6934L249.272 86.2707" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="243.38900756835938 86.27069854736328"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M253.979 104.98L259.915 100.39" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="253.97900390625 100.38999938964844"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M264.569 120.393L278.688 112.157" stroke="#C54139" stroke-width="2"
                                      stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="264.5690002441406 112.15699768066406"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M270.978 134.731L278.559 131.303" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="270.9779968261719 131.30299377441406"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M278.576 151.15L286.028 148.548" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="278.57598876953125 148.54800415039062"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M283.394 168.323L291.019 166.282" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="283.3940124511719 166.28199768066406"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M286.924 185.232L294.819 183.932" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="286.92401123046875 183.9320068359375"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M289.278 203.333L296.76 202.758" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="289.27801513671875 202.75799560546875"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M290.454 220.407L309.281 220.407" stroke="#C54139" stroke-width="2"
                                      stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="290.4540100097656 220.40699768066406"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M289.277 238.057L297.578 238.62" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="289.2770080566406 238.0570068359375"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M287.481 255.814L295.278 257.043" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="287.4809875488281 255.81399536132812"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M283.611 272.049L291.295 273.854" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="283.6109924316406 272.04901123046875"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M278.73 288.618L286.302 291.204" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="278.7300109863281 288.6180114746094"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M272.249 304.505L279.114 307.535" stroke="#C54139" stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="272.2489929199219 304.5050048828125"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                                <path d="M264.569 321.598L279.865 331.011" stroke="#C54139" stroke-width="2"
                                      stroke-linecap="round"
                                      style="translate: none; rotate: none; scale: none; opacity: 1; visibility: inherit;"
                                      data-svg-origin="264.5690002441406 321.5979919433594"
                                      transform="matrix(1,0,0,1,0,0)"></path>
                            </svg>
                        </div>
                        <div
                            class="flex flex-wrap items-start gap-14 self-center pt-10 min-[600px]:gap-10 min-[630px]:pt-0 min-[700px]:justify-self-center min-[700px]:[grid-area:1/-1]">
                            <div
                                class="flex w-full flex-wrap items-start justify-around gap-10 min-[600px]:w-auto min-[600px]:flex-col min-[630px]:hidden">

                                <a href="https://www.oman2040.om/" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end">
                                        <span
                                            class="relative -left-0.5 text-lg transition duration-500 motion-reduce:transition-none">
الإنسان والمجتمع
                                        </span>
                                    </div>
                                </a>

                                <a href="https://www.oman2040.om/" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end gap-px">
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                 الاقتصاد والتنمية
                            </span>
                                    </div>
                                </a>

                                <a href="https://www.oman2040.om/" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75z"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end gap-px">
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                 الحوكمة والأداء المؤسسي
                            </span>
                                    </div>
                                </a>

                                <a href="https://www.oman2040.om/" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-primary">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end gap-px">
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                البيئة المستدامة
                            </span>
                                    </div>
                                </a>
                            </div>

                            <div x-ref="tall_stack_description"
                                 class="relative z-30 w-full min-[600px]:w-auto min-[630px]:top-40 min-[630px]:pl-5 min-[630px]:pt-0 min-[700px]:top-0 min-[700px]:pl-0 min-[700px]:pr-0"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div class="flex justify-center min-[600px]:justify-start min-[700px]:justify-end">
                                    <div>
                                        <div class="text-2xl">
                                            المحاور الأربعة لرؤية
                                        </div>
                                        <div class="grid">
                                            <div class="text-3xl font-black tracking-wide [grid-area:1/-1]">
                                                عمان 2040
                                            </div>
                                            <div
                                                class="-z-10 h-5 w-16 self-end justify-self-start bg-peach-orange [grid-area:1/-1]"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div
                            class="relative flex w-full flex-wrap items-center justify-center gap-x-10 gap-y-7 self-start justify-self-end pt-14 min-[600px]:pt-60 min-[700px]:pt-0 md:top-20 md:w-auto md:flex-col md:[grid-area:1/-1]">


                            <div x-ref="downloads" class="min-w-[12rem] space-y-3 rounded-2xl bg-primary/20 p-5"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div
                                    class="text-center font-roboto-mono text-2xl font-medium text-primary">{{ $page->data['stats_1_number'] }}
                                </div>
                                <div class="flex items-center justify-center gap-3 text-butter">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                                    </svg>
                                    <div class="min-w-[5.5rem] text-sm font-medium text-primary">
                                        {{ $page->data['stats_1_title'] }}
                                    </div>
                                </div>
                            </div>
                            <div x-ref="github_stars" class="min-w-[12rem] space-y-3 rounded-2xl bg-primary/20 p-5"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div
                                    class="text-center font-roboto-mono text-2xl font-medium text-primary">{{ $page->data['stats_2_number'] }}
                                </div>
                                <div class="flex items-center justify-center gap-3 text-butter">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                                    </svg>
                                    <div class="min-w-[5.5rem] text-sm font-medium text-primary">
                                        {{ $page->data['stats_2_title'] }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="py-36 container" id="featurs">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['competitive_advantages_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>{{ $page->data['competitive_advantages_main_description'] }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-24">
            @foreach($page->data['competitive_advantages'] as $advantage)
                <div class="flex flex-col">
                    <div class="relative">
                        <x-icon name="{{ $advantage['icon'] }}" class="w-16 h-16 text-primary z-30"/>
                        <img src="{{ asset('image/polygon-pink.svg') }}" class="absolute -top-6 right-0 -z-10" alt="">
                    </div>
                    <h1 class="text-3xl font-bold mt-8">{{ $advantage['title'] }}</h1>
                    <p class="text-gray-500 mt-5">{{ $advantage['description'] }}</p>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-16 container">
        <div class="flex flex-col md:flex-row items-center justify-center">
            <div>
                <img src="/storage/{{ $page->data['international_success_main_image'] }}" alt="">
            </div>
            <div class="flex items-start flex-col w-full md:w-1/3 md:rtl:-mr-24">
                <div class="relative text-gray-800 text-center mb-5">
                    <h1 class="text-3xl font-bold mb-5">{{ $page->data['international_success_main_title'] }}</h1>
                    <div class="w-48 h-4 bg-secondary mx-auto -mt-10"></div>
                </div>
                <p class="text-md">{{ $page->data['international_success_main_description'] }}</p>
            </div>
        </div>
    </section>


    <section class="py-36 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['business_friendly_environment_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>{{ $page->data['business_friendly_environment_main_description'] }}</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-24">
            @foreach($page->data['business_friendly_environment_features'] as $feature)
                <div class="flex flex-col items-center justify-center">
                    <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                        </svg>
                    </div>
                    <h1 class="text-lg mt-2 text-center">{{ $feature['description'] }}</h1>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-24 container flex flex-col md:flex-row items-center" id="support_investors">
        <div class="w-full md:w-2/5">
            <div
                class="bg-secondary relative rounded-3xl py-5 flex items-center justify-center border-2 border-primary">
                <img src="/storage/{{ $page->data['infrastructure_image'] }}" class="w-[90%]" alt="">
            </div>
        </div>
        <div class="flex-1 mr-5 mt-16 md:mt-0">
            <div class="relative text-gray-800 mb-10">
                <h1 class="text-3xl font-bold mb-5">{{ $page->data['infrastructure_main_title'] }}</h1>
                <div class="w-52 h-4 bg-secondary -mt-10"></div>
            </div>
            <p class="text-gray-500 leading-loose">
                {!! $page->data['infrastructure_description'] !!}
            </p>
        </div>
    </section>


    <section class="py-24 container" id="support_investors">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="text-white bg-primary p-10 rounded-t-2xl md:rounded-r-2xl">
                <div class="relative">
                    <h1 class="text-white font-bold text-2xl z-30 relative">{{ $page->data['cost_col_1_title'] }}</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <p class="text-white leading-loose mt-3">{{ $page->data['cost_col_1_description'] }}</p>
            </div>
            <div class="text-white bg-light-gray p-10 rounded-b-2xl md:rounded-l-2xl">
                <div class="relative">
                    <h1 class="text-primary font-bold text-2xl z-30 relative">{{ $page->data['cost_col_2_title'] }}</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <p class="text-primary leading-loose mt-3">
                    {{ $page->data['cost_col_2_description'] }}
                </p>
            </div>
        </div>
    </section>


    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['fun_facts_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mt-24">
            @foreach($page->data['fun_facts'] as $fact)
                <div class="flex flex-col items-start justify-start">
                    <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                        </svg>

                    </div>
                    <h1 class="text-lg mt-3">{{ $fact['description'] }}</h1>
                </div>
            @endforeach
        </div>
    </section>

    <section class="py-36 container" id="success-framework">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['success_framework_main_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
            <p class="mt-5">{{ $page->data['success_framework_main_description'] }}</p>
        </div>
        <div class="flex items-center justify-center">
            <div class="relative w-[857px] h-[851px] rounded-3xl p-5 md:p-10 flex items-end"
                 style="background: url('{{ asset('image/talent.svg') }}'); background-size: cover; background-position:  center center;">
                <div class="bg-white/30 backdrop-blur-2xl p-10 rounded-2xl">
                    <div class="relative text-gray-800 text-center">
                        <h1 class="text-3xl font-bold mb-5">{{ $page->data['talents_main_title'] }}</h1>
                        <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
                        <p class="mt-6 leading-loose">{{ $page->data['talents_main_description'] }}</p>
                    </div>
                </div>
                <img src="{{ asset('image/2-traingol.svg') }}" class="absolute -top-10 -right-10 w-32 hidden md:block" alt="">
                <img src="{{ asset('image/cercle-2.svg') }}" class="absolute top-1/2 -left-10 w-32 hidden md:block" alt="">
            </div>
        </div>
    </section>

    <section class="py-24 container" id="support_investors">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="text-white rounded-t-2xl md:rounded-r-2xl rounded-b-none w-full h-96 md:h-auto"
                 style="background: url('/storage/{{ $page->data['natural_col_2_image'] }}'); background-size: cover; background-position: top center;">

            </div>
            <div class="text-white bg-primary px-10 py-24 rounded-none md:rounded-l-2xl rounded-b-none">
                <div class="relative">
                    <h1 class="text-white font-bold text-2xl z-30 relative">{{ $page->data['natural_col_1_title'] }}</h1>
                </div>
                <p class="text-white leading-loose mt-3">
                    {{ $page->data['natural_col_1_description'] }}
                </p>
            </div>
            <div class="text-white bg-light-gray px-10 py-24 rounded-none md:rounded-r-2xl rounded-t-none">
                <div class="relative">
                    <h1 class="text-primary font-bold text-2xl z-30 relative">{{ $page->data['natural_col_2_title'] }}</h1>
                </div>
                <p class="text-primary leading-loose mt-3">
                    {{ $page->data['natural_col_2_description'] }}
                </p>
            </div>
            <div class="text-white rounded-b-2xl md:rounded-l-2xl rounded-t-none w-full h-96 md:h-auto"
                 style="background: url('/storage/{{ $page->data['natural_col_2_image'] }}'); background-size: cover; background-position: top center;">

            </div>
        </div>
    </section>

    <section class="py-24 container" id="investor-residency-program">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['investor_residency_program_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
            <p class="mt-5">
                {{ $page->data['investor_residency_program_description'] }}
            </p>
        </div>
        <div class="w-full flex flex-col md:flex-row">
            <div class="flex items-center justify-center w-full md:w-1/2">
                <div>
                    <img src="{{ asset('image/goals.svg') }}" alt="">
                </div>
                <div class="flex items-start flex-col w-2/3 rtl:-mr-44 mt-24">
                    <div class="relative text-gray-800 text-center mb-1">
                        <h1 class="text-3xl text-primary font-bold mb-1">{{ $page->data['investor_residency_program_goal_title'] }}</h1>
                    </div>
                    <p class="text-md">{{ $page->data['investor_residency_program_goal_description'] }}</p>
                </div>
            </div>
            <div class="flex-1 mr-4">
                <div class="grid grid-cols-1 gap-4 mt-6">
                    @foreach($page->data['investor_residency_program_features'] as $feature)
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


    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['investor_residency_program_category_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-6">
            <div class="text-white bg-primary p-10 rounded-t-2xl md:rounded-r-2xl">
                <div class="relative">
                    <h1 class="text-white font-bold text-2xl z-30 relative">{{ $page->data['investor_residency_program_category_1_title'] }}</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                {!! $page->data['investor_residency_program_category_1_description'] !!}
            </div>
            <div class="text-white bg-light-gray p-10  rounded-b-2xl md:rounded-l-2xl">
                <div class="relative">
                    <h1 class="text-primary font-bold text-2xl z-30 relative">{{ $page->data['investor_residency_program_category_2_title'] }}</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <div class="text-primary">{!! $page->data['investor_residency_program_category_2_description'] !!}</div>
            </div>
        </div>
    </section>

    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">{{ $page->data['investor_residency_program_roles_title'] }}</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mt-24">
            @foreach($page->data['investor_residency_program_roles'] as $role)
                <div class="flex flex-col items-start justify-start">
                    <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                        </svg>

                    </div>
                    <h1 class="text-lg mt-3">{{ $role['description'] }}</h1>
                </div>
            @endforeach
        </div>

        <a href="{{ $page->data['investor_residency_program_link'] }}"
           class="flex  items-center justify-between space-y-4 bg-gradient-to-tr from-[#E35656] to-[#9B2E2E] rounded-lg mt-11 p-6">
            <div>
                <h1 class="text-white text-2xl">الاطِّلاع على مزيد من المعلومات</h1>
                <h1 class="text-white text-2xl">حول برنامج إقامة مستثمر</h1>
            </div>
            <div>
                <img src="{{ asset('image/arow-left.svg') }}" alt="">
            </div>
        </a>

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
