<div>
    <x-partials.title title="لماذا سلطنة عُمان"
                      description="في ظل القيادة الحكيمة والتوجيهات الرشيدة من مولانا حضرة صاحب الجلالة السلطان هيثم بن طارق المعظم، حفظه الله ورعاه، أعادت سلطنة عُمان صياغة نهجها الاقتصادي والتجاري، ومع إطلاق رؤية عُمان 2040، بدأت حقبة ديناميكية جديدة من النمو الاقتصادي، وعصر جديد ومتجدد للنهضة المباركة"></x-partials.title>

    <section class="container bg-light-gray rounded-lg">
        <div class="flex justify-between">
            <a href="#support_investors"
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">01</h2>
                <h1 class="text-xl font-bold text-gray-700">رؤية عُمان 2040</h1>
            </a>
            <a href="#support_exports" -
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">02</h2>
                <h1 class="text-xl font-bold text-gray-700">المزايا التنافسية في سلطنة عُمان</h1>
            </a>
            <a href="#support_external"
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">03</h2>
                <h1 class="text-xl font-bold text-gray-700">إطار النجاح</h1>
            </a>
            <a href="#support_external"
               class="inline-block flex items-center flex-col py-8 border-b-2 border-transparent">
                <h2 class="text-gray-500 mb-4">03</h2>
                <h1 class="text-xl font-bold text-gray-700">برنامج إقامة مستثمر</h1>
            </a>
        </div>
    </section>


    <section class="py-36 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">رؤية عُمان 2040</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>تـعد رؤية عُمان 2040 المرجع الوطني للتخطـيط الاقتصادي والاجتماعي لسلطـنة عُمان خـلال الفــترة 2021-2040،
                ومنها تنبثـق الاســتراتيجـــيات الوطـنية القطاعــية والخطط الخمسـية للتنمية. أُعدّت رؤية عُمان 2040 من
                خلال مشاركة مجتمعية واسعة، وقد تم اعتماد وثيقة الرؤية من لدن المقام السامي لحضرة صاحب الجلالة السلطان
                هيثم بن طارق – حفظه الله ورعاه – في نهاية عام 2020، ليتم العمل عليها منذ بداية عام 2021 ولغاية 2040.</p>
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
                                <a href="https://tailwindcss.com" target="_blank"
                                   class="flex items-center gap-3 transition duration-300 group-hover/tall-link:translate-x-1 motion-reduce:transition-none motion-reduce:group-hover/tall-link:transform-none">

                                    <div class="flex items-end">
                                        <span
                                            class="relative -left-0.5 text-lg transition duration-500 motion-reduce:transition-none">
                                الإنسان والمجتمع
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
                                            الاقتصاد والتنمية
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
                                            <span>الحوكمة والأداء</span>
                                            <br>
                                            <span>المؤسسي</span>
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
                                            البيئة المستدامة
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

                                <a href="https://tailwindcss.com" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg class="w-7" xmlns="http://www.w3.org/2000/svg" fill="none"
                                             viewBox="0 0 54 33">
                                            <g clip-path="url(#prefix__clip0)">
                                                <path fill="#38bdf8" fill-rule="evenodd"
                                                      d="M27 0c-7.2 0-11.7 3.6-13.5 10.8 2.7-3.6 5.85-4.95 9.45-4.05 2.054.513 3.522 2.004 5.147 3.653C30.744 13.09 33.808 16.2 40.5 16.2c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C36.756 3.11 33.692 0 27 0zM13.5 16.2C6.3 16.2 1.8 19.8 0 27c2.7-3.6 5.85-4.95 9.45-4.05 2.054.514 3.522 2.004 5.147 3.653C17.244 29.29 20.308 32.4 27 32.4c7.2 0 11.7-3.6 13.5-10.8-2.7 3.6-5.85 4.95-9.45 4.05-2.054-.513-3.522-2.004-5.147-3.653C23.256 19.31 20.192 16.2 13.5 16.2z"
                                                      clip-rule="evenodd"></path>
                                            </g>
                                            <defs>
                                                <clipPath id="prefix__clip0">
                                                    <path fill="#fff" d="M0 0h54v32.4H0z"></path>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </div>

                                    <div class="flex items-end">
                                        <span class="text-2xl font-bold">T</span>
                                        <span
                                            class="relative -left-0.5 text-lg transition duration-500 motion-reduce:transition-none">
                                ailwind CSS
                            </span>
                                    </div>
                                </a>

                                <a href="https://alpinejs.dev" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg class="scale-90" width="32" height="16" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="m24.657.653 7.045 7.066-7.045 7.066-7.044-7.066L24.657.653Z"
                                                  fill="#77C1D2"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="m7.045.653 14.605 14.65H7.56L0 7.718 7.045.653Z"
                                                  fill="#2D3441"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end gap-px">
                                        <span class="text-2xl font-bold">A</span>
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                lpine.js
                            </span>
                                    </div>
                                </a>

                                <a href="https://laravel.com" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg width="23" height="25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M22.37 6.03a.38.38 0 0 1 .013.095v5.045a.375.375 0 0 1-.181.319l-4.151 2.438v4.831a.376.376 0 0 1-.181.32l-8.665 5.088c-.02.012-.041.018-.062.026-.009.003-.017.008-.025.01a.355.355 0 0 1-.185 0c-.01-.002-.019-.008-.028-.012a.322.322 0 0 1-.06-.024L.181 19.078a.375.375 0 0 1-.18-.32V3.625c0-.033.003-.065.012-.096.002-.012.009-.021.012-.031.007-.02.014-.04.024-.058.006-.012.016-.021.024-.032.01-.015.02-.03.032-.043.01-.011.024-.019.036-.028.013-.01.024-.022.04-.031L4.513.76a.357.357 0 0 1 .36 0l4.332 2.544h.001c.015.01.026.022.04.032.012.01.025.017.035.028.013.012.022.028.032.043.008.01.018.02.025.032.01.018.016.038.023.058.004.01.01.02.013.03a.38.38 0 0 1 .012.097v9.452l3.61-2.12V6.125a.38.38 0 0 1 .013-.096c.003-.011.009-.02.013-.03.007-.02.013-.04.023-.058.007-.012.017-.022.025-.032.01-.015.02-.03.032-.043.01-.011.023-.019.035-.028.013-.01.025-.023.04-.031l4.333-2.545a.356.356 0 0 1 .36 0l4.332 2.544c.015.01.027.021.04.031.012.01.025.018.036.028.012.013.021.029.032.043.008.011.018.02.024.033.01.018.017.038.024.057.004.01.01.02.012.031Zm-.709 4.927V6.762l-1.516.89-2.094 1.23v4.195l3.61-2.12Zm-4.332 7.588v-4.197l-2.06 1.2-5.883 3.424v4.237l7.943-4.664ZM.722 4.261v14.285l7.942 4.664v-4.237l-4.149-2.395v-.001h-.003c-.014-.009-.025-.02-.038-.031-.012-.01-.025-.017-.035-.027v-.001c-.012-.012-.02-.026-.03-.039-.01-.012-.02-.023-.027-.035v-.002c-.009-.014-.014-.03-.02-.046-.006-.014-.013-.026-.017-.041-.005-.018-.005-.037-.007-.055-.002-.014-.006-.027-.006-.041V6.38L2.24 5.151l-1.517-.89Zm3.971-2.756-3.608 2.12 3.608 2.119 3.609-2.12-3.609-2.119ZM6.57 14.73l2.094-1.23V4.262l-1.516.89-2.094 1.23v9.24l1.516-.89ZM17.69 4.006l-3.609 2.12 3.609 2.118 3.608-2.119-3.608-2.119Zm-.361 4.876-2.094-1.23-1.516-.89v4.195l2.094 1.23 1.516.89V8.882Zm-8.304 9.453 5.293-3.082 2.646-1.54-3.606-2.118-4.153 2.438-3.784 2.222 3.604 2.08Z"
                                                  fill="#FF2D20"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end gap-px">
                                        <span class="text-2xl font-bold">L</span>
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                aravel
                            </span>
                                    </div>
                                </a>

                                <a href="https://laravel-livewire.com" target="_blank"
                                   class="group/tall-link flex items-center gap-3 transition duration-300 motion-reduce:transition-none">

                                    <div class="grid w-8 place-items-center">
                                        <svg width="24" height="27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M22.415 17.96c-.438.662-.77 1.478-1.66 1.478-1.5 0-1.58-2.31-3.08-2.31-1.498 0-1.417 2.31-2.916 2.31-1.498 0-1.579-2.31-3.078-2.31-1.5 0-1.418 2.31-2.916 2.31-1.499 0-1.58-2.31-3.079-2.31s-1.418 2.31-2.916 2.31c-.471 0-.802-.228-1.081-.541A12.796 12.796 0 0 1 0 12.507C0 5.663 5.287.115 11.809.115c6.521 0 11.808 5.548 11.808 12.392 0 1.957-.432 3.807-1.202 5.453Z"
                                                  fill="#FB70A9"></path>
                                            <path
                                                d="M7.093 16.737v5.132a1.668 1.668 0 1 1-3.336 0v-6.196c.312-.571.667-1.066 1.308-1.066 1.044 0 1.408 1.31 2.028 2.13Zm6.3.267v8.117a1.853 1.853 0 0 1-3.706 0v-9.187c.35-.673.709-1.327 1.446-1.327 1.167 0 1.485 1.64 2.26 2.397Zm5.93-.149v5.892a1.668 1.668 0 0 1-3.335 0v-7.242c.29-.497.636-.898 1.213-.898 1.096 0 1.443 1.445 2.122 2.248Z"
                                                fill="#4E56A6"></path>
                                            <path
                                                d="M7.093 18.31c-.296-.362-.646-.631-1.152-.631-1.203 0-1.424 1.515-2.183 2.199V13.34a1.668 1.668 0 1 1 3.335 0v4.97Zm6.3.117c-.315-.42-.684-.748-1.244-.748-1.337 0-1.46 1.876-2.462 2.394v-2.89a1.853 1.853 0 1 1 3.707 0v1.244Zm5.93-.325c-.256-.253-.56-.423-.965-.423-1.296 0-1.451 1.76-2.37 2.342v-5.869a1.668 1.668 0 0 1 3.335 0v3.95Z"
                                                fill="#000" fill-opacity=".299"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M22.415 17.96c-.438.662-.77 1.478-1.66 1.478-1.5 0-1.58-2.31-3.08-2.31-1.498 0-1.417 2.31-2.916 2.31-1.498 0-1.579-2.31-3.078-2.31-1.5 0-1.418 2.31-2.916 2.31-1.499 0-1.58-2.31-3.079-2.31s-1.418 2.31-2.916 2.31c-.471 0-.802-.228-1.081-.541A12.796 12.796 0 0 1 0 12.507C0 5.663 5.287.115 11.809.115c6.521 0 11.808 5.548 11.808 12.392 0 1.957-.432 3.807-1.202 5.453Z"
                                                  fill="#FB70A9"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M19.86 19.191c3.094-4.603 3.174-9.71.24-15.319a12.36 12.36 0 0 1 3.517 8.66c0 1.95-.448 3.794-1.246 5.434-.454.66-.799 1.472-1.721 1.472-.316 0-.571-.095-.79-.247Z"
                                                  fill="#E24CA6"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                  d="M11.175 15.598c4.107 0 5.836-2.382 5.836-5.765 0-3.384-2.613-6.498-5.835-6.498-3.223 0-5.836 3.114-5.836 6.498 0 3.383 1.73 5.765 5.835 5.765Z"
                                                  fill="#fff"></path>
                                            <path
                                                d="M9.607 10.024c1.208 0 2.188-1.081 2.188-2.415s-.98-2.416-2.188-2.416c-1.21 0-2.189 1.082-2.189 2.416 0 1.334.98 2.415 2.189 2.415Z"
                                                fill="#030776"></path>
                                            <path
                                                d="M9.242 8.166c.604 0 1.094-.499 1.094-1.115 0-.615-.49-1.114-1.094-1.114-.605 0-1.095.499-1.095 1.114 0 .616.49 1.115 1.095 1.115Z"
                                                fill="#fff"></path>
                                        </svg>
                                    </div>

                                    <div class="flex items-end gap-px">
                                        <span class="text-2xl font-bold">L</span>
                                        <span class="text-lg transition duration-500 motion-reduce:transition-none">
                                ivewire
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
                                    class="text-center font-roboto-mono text-2xl font-medium text-primary">30
                                </div>
                                <div class="flex items-center justify-center gap-3 text-butter">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                                    </svg>
                                    <div class="min-w-[5.5rem] text-sm font-medium text-primary">
                                        من أفضل دولة
                                    </div>
                                </div>
                            </div>
                            <div x-ref="github_stars" class="min-w-[12rem] space-y-3 rounded-2xl bg-primary/20 p-5"
                                 style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div
                                    class="text-center font-roboto-mono text-2xl font-medium text-primary">7617.8+
                                </div>
                                <div class="flex items-center justify-center gap-3 text-butter">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                         stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z"/>
                                    </svg>
                                    <div class="min-w-[5.5rem] text-sm font-medium text-primary">
                                        دخل الفرد
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


    <section class="py-36 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">المزايا التنافسية في سلطنة عُمان</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>بحلول عام 2025، سينضم مليار شخص إلى طبقة المستهلكين العالمية، ويعيش حوالي 600 مليون منهم في الأسواق
                الناشئة على أعتاب سلطنة عُمان. وستحظى الشركات التي تتفهم هذه الديناميكيات المتغيرة وتستجيب لها بفوائد
                هائلة. تحتل سلطنة عُمان موقعًا إستراتيجيًا وتتميَّز بقاعدة أعمال، وسجلٍّ حافلٍ بالإنجازات، وبنية تحتية،
                وخبرة، ومواهب، وقيادات، وارتباط عالمي يجعلها قادرة على مساعدة أي شركة في المضي قدمًا بطموحاتها</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-24">
            <div class="flex flex-col">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-16 h-16 text-primary z-30">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.5 18.75h-9m9 0a3 3 0 013 3h-15a3 3 0 013-3m9 0v-3.375c0-.621-.503-1.125-1.125-1.125h-.871M7.5 18.75v-3.375c0-.621.504-1.125 1.125-1.125h.872m5.007 0H9.497m5.007 0a7.454 7.454 0 01-.982-3.172M9.497 14.25a7.454 7.454 0 00.981-3.172M5.25 4.236c-.982.143-1.954.317-2.916.52A6.003 6.003 0 007.73 9.728M5.25 4.236V4.5c0 2.108.966 3.99 2.48 5.228M5.25 4.236V2.721C7.456 2.41 9.71 2.25 12 2.25c2.291 0 4.545.16 6.75.47v1.516M7.73 9.728a6.726 6.726 0 002.748 1.35m8.272-6.842V4.5c0 2.108-.966 3.99-2.48 5.228m2.48-5.492a46.32 46.32 0 012.916.52 6.003 6.003 0 01-5.395 4.972m0 0a6.726 6.726 0 01-2.749 1.35m0 0a6.772 6.772 0 01-3.044 0"/>
                    </svg>
                    <img src="{{ asset('image/polygon-pink.svg') }}" class="absolute -top-6 right-0 -z-10" alt="">
                </div>
                <h1 class="text-3xl font-bold mt-8">سجل دولي حافل بالإنجازات</h1>
                <p class="text-gray-500 mt-5">إن مساعدة الشركات العُمانية في دخول الأسواق المتقدمة والناشئة أمر مهم
                    بالنسبة إلينا. وفي الواقع، يزداد عدد الشركات العُمانية المصدِّرة للأسواق الدولية يومًا بعد يوم.
                    وبلغت قيمة الصادرات العُمانية غير النفطية 9,11 مليار دولار أمريكي في عام 2022 إلى أكثر من 130 بلدًا،
                    بزيادة 41٪ عن عام 2021.</p>
            </div>
            <div class="flex flex-col">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-16 h-16 text-primary z-30">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"/>
                    </svg>
                    <img src="{{ asset('image/polygon-pink.svg') }}" class="absolute -top-6 right-0 -z-10" alt="">
                </div>
                <h1 class="text-3xl font-bold mt-8">الاتفاقيات التجارية</h1>
                <p class="text-gray-500 mt-5">إنَّ سلطنة عُمان عضو في منظمة التجارة العالمية، والسوق المشتركة لدول مجلس
                    التعاون الخليجي، واتفاقية التجارة الحرة العربية الكبرى (GAFTA) ولديها اتفاقيات تجارة حرة مع الولايات
                    المتحدة الأمريكية، وسنغافورة، وأيسلندا، والنرويج، وسويسرا، وليختنشتاين.</p>
            </div>
            <div class="flex flex-col">
                <div class="relative">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-16 h-16 text-primary z-30">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M9 14.25l6-6m4.5-3.493V21.75l-3.75-1.5-3.75 1.5-3.75-1.5-3.75 1.5V4.757c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0111.186 0c1.1.128 1.907 1.077 1.907 2.185zM9.75 9h.008v.008H9.75V9zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0zm4.125 4.5h.008v.008h-.008V13.5zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/>
                    </svg>
                    <img src="{{ asset('image/polygon-pink.svg') }}" class="absolute -top-6 right-0 -z-10" alt="">
                </div>
                <h1 class="text-3xl font-bold mt-8">الإعفاءات الضريبية</h1>
                <p class="text-gray-500 mt-5">تقدِّم سلطنة عُمان إعفاءات جمركية على استيراد آلات المصانع والمواد الخام
                    لمدة خمس سنوات من بدء الإنتاج.</p>
            </div>
        </div>
    </section>

    <section class="py-16 container">
        <div class="flex items-center justify-center">
            <div>
                <img src="{{ asset('image/international.png') }}" alt="">
            </div>
            <div class="flex items-start flex-col w-1/3 rtl:-mr-24">
                <div class="relative text-gray-800 text-center mb-5">
                    <h1 class="text-3xl font-bold mb-5">النجاح الدولي</h1>
                    <div class="w-48 h-4 bg-secondary mx-auto -mt-10"></div>
                </div>
                <p class="text-md">نحن متحمسون لمساعدة مجتمع الأعمال العُماني، والشركات من جميع الأحجام، على الاستفادة
                    من النمو الاقتصادي أينما كان يحدث في العالم. وفي إطار العمل لتحقيق هذا الهدف، نقدِّم للشركات
                    العُمانية الدعم اللازم لضمان قدرتها على المنافسة في سوق عالمية مليئة بالتحديات المتزايدة. وهذه
                    إستراتيجية فعَّالة. وفي الواقع، تحظى المنتجات والخدمات العُمانية بنجاح دولي هائل.</p>
            </div>
        </div>
    </section>


    <section class="py-36 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">بيئة داعمة للأعمال</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-6"></div>
            <p>
                تتميَّز سلطنة عُمان بالاستقرار والشفافية القانونية، فضلًا عن انخفاض مستوى البيروقراطية والضرائب وعن
                طموحها الكبير ومشاريعها الضخمة. يمكن للمستثمرين تأسيس أعمالهم بسرعة وبأقل قدر من الإجراءات الروتينية،
                وفي الوقت ذاته يتيح لهم إطارنا التشريعي العمل بشكل مباشر وبدون متاعب.وهناك مساحات عمل ومكاتب عالية
                الجودة وبأسعار معقولة في كل جزء من البلاد إلى جانب تكاليف التأسيس والتشغيل التنافسية التي تضع الشركات
                التي لها مقرات في سلطنة عُمان على طريق النجاح.</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-24">
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">يمكن تأسيس الأعمال المملوكة للأجانب بنسبة 100٪ بكل سرعة وسهولة</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">ما مِن ضوابط على النقد الأجنبي</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">ما مِن ضريبة على الدخل الشخصي</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">تتوفر شفافية قانونية</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">يشيع التحدُّث باللغة الإنجليزية ويتم استخدامها على نطاق واسع</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">الاستقرار والهدوء</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">الانفتاح، والود، والابتكار من منظور عالمي</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <div class="flex w-16 h-16 items-center justify-center rounded-lg bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3 3v1.5M3 21v-6m0 0l2.77-.693a9 9 0 016.208.682l.108.054a9 9 0 006.086.71l3.114-.732a48.524 48.524 0 01-.005-10.499l-3.11.732a9 9 0 01-6.085-.711l-.108-.054a9 9 0 00-6.208-.682L3 4.5M3 15V4.5"/>
                    </svg>
                </div>
                <h1 class="text-lg mt-2 text-center">ما مِن ضوابط على النقد الأجنبي</h1>
            </div>
        </div>
    </section>

    <section class="py-24 container flex items-center" id="support_investors">
        <div class="w-full md:w-2/5">
            <div
                class="bg-secondary relative rounded-3xl py-5 flex items-center justify-center border-2 border-primary">
                <img src="{{ asset('image/road.svg') }}" class="w-[90%]" alt="">
            </div>
        </div>
        <div class="flex-1 mr-5">
            <div class="relative text-gray-800 mb-10">
                <h1 class="text-3xl font-bold mb-5">البنية التحتية</h1>
                <div class="w-52 h-4 bg-secondary -mt-10"></div>
            </div>
            <p class="text-gray-500 leading-loose">
                صُنِّفت الطرق، والموانئ، والمطارات في سلطنة عُمان على أنَّها من أفضل الطرق في العالم، ونفتخر بأنَّ لدينا
                مجمعات تقنية من الدرجة الأولى، بالإضافة إلى خصائص التصنيع والتجارة. ونقدم كل ما تحتاجه أي شركة طموحة
                لتحقيق النجاح.
            </p>
            <p class="text-gray-500 leading-loose mt-4">
                أدى نمونا الاقتصادي الناجح والمستمر إلى تحسين الخدمات الترفيهية، والصناعية، والمكتبية وخدمات الإسكان في
                سلطنة عُمان، ما عزَّز قدرتنا على جذب الاستثمارات والمواهب والاحتفاظ بها لنوفِّر لك فرصًا رائعة في السوق.
            </p>
        </div>
    </section>


    <section class="py-24 container" id="support_investors">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="text-white bg-primary p-10 rounded-r-2xl">
                <div class="relative">
                    <h1 class="text-white font-bold text-2xl z-30 relative">فعالية التكلفة</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <p class="text-white leading-loose mt-3">
                    تتميَّز سلطنة عُمان بتكلفة تنافسية للأعمال مقارنة بالعديد من بلدان المنطقة. ووفقًا للبنك الدولي، تم
                    تصنيف سلطنة عُمان كواحدة من أكثر بلدان الشرق الأوسط توفيرًا في تكلفة ممارسة الأعمال التجارية من حيث
                    التأثير المشترك لمكونات التكلفة العالية للأعمال، بما في ذلك العمالة، والمرافق، والمنشآت، والنقل،
                    وتكاليف التمويل، والضرائب.
                </p>
            </div>
            <div class="text-white bg-light-gray p-10 rounded-l-2xl">
                <div class="relative">
                    <h1 class="text-primary font-bold text-2xl z-30 relative">تكلفة أداء الأعمال التجارية</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <p class="text-primary leading-loose mt-3">
                    يستحق الأمر مزاولة الأعمال التجارية في سلطنة عُمان. ووفقًا للبنك الدولي، تم تصنيف سلطنة عُمان كواحدة
                    من أكثر بلدان الشرق الأوسط توفيرًا في تكلفة ممارسة الأعمال التجارية من حيث التأثير المشترك لمكونات
                    التكلفة العالية، بما في ذلك العمالة، والمرافق، والمنشآت، والنقل، وتكاليف التمويل، والضرائب.
                </p>
            </div>
        </div>
    </section>


    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">معلومات قد تهمك</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mt-24">
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">تتيح اتفاقيات التجارة الحرة العديدة في سلطنة عُمان للأعمال الوصول إلى أكثر من
                    750 مليون مستهلك.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">88٪ من المليار شخص القادمين الذين سينضمون إلى الطبقة الوسطى على مستوى العالم
                    سيكونون آسيويين</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">من المتوقع أن يصل حجم الطبقة الوسطى الآسيوية إلى ما يقرب من 3.5 مليار شخص، أو
                    65٪ من إجمالي سكان العالم بحلول عام 2030. زيادة عن 1.4 مليار في عام 2015</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">تتيح اتفاقيات التجارة الحرة العديدة في سلطنة عُمان للأعمال الوصول إلى أكثر من
                    750 مليون مستهلك.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">تتيح اتفاقيات التجارة الحرة العديدة في سلطنة عُمان للأعمال الوصول إلى أكثر من
                    750 مليون مستهلك.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">تتيح اتفاقيات التجارة الحرة العديدة في سلطنة عُمان للأعمال الوصول إلى أكثر من
                    750 مليون مستهلك.</h1>
            </div>
        </div>
    </section>

    <section class="py-36 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">إطار النجاح</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
            <p class="mt-5">نوفر إطارًا يدعم الاستثمار والأعمال الناجحة في سلطنة عُمان من خلال مدننا الصناعية، ومناطقنا
                الحرة،
                ومناطقنا الاقتصادية الخاصة، ومجمعاتنا التكنولوجية من الطراز العالمي، وذلك لأنَّ كلها مراكز تجارية
                وصناعية مزدهرة ومستعدة للمستقبل. لدى سلطنة عُمان وفرة في رأس المال الفكري. ويتميَّز 66 معهدًا للتعليم
                العالي لدينا بسجل حافل من العمل في مجال الصناعة للابتكار في القطاعات الرئيسية، بما في ذلك التصنيع،
                والثروة السمكية، والسياحة، واللوجستيات، والتعدين، والرعاية الصحية، والبتروكيماويات، والتعليم.</p>
        </div>
        <div class="flex items-center justify-center">
            <div class="relative w-[857px] h-[851px] rounded-3xl p-10 flex items-end"
                 style="background: url('{{ asset('image/talent.svg') }}'); background-size: cover;">
                <div class="bg-white/30 backdrop-blur-2xl p-10 rounded-2xl">
                    <div class="relative text-gray-800 text-center">
                        <h1 class="text-3xl font-bold mb-5">أفضل المواهب</h1>
                        <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
                        <p class="mt-6 leading-loose">أحد الأسباب الرئيسية التي تجعل الشركات تختار سلطنة عُمان هو
                            المجموعة المتميزة التي نمتلكها من المواهب والمكونة من أفراد مهرة متعددي اللغات، ومبدعين،
                            ورياديين. ويحرص ًاكل من الأكاديمية السلطانية للإدارة وأكاديمية مدائن للابتكار الصناعي على أن
                            تمتلك سلطنة عُمان قوة عاملة مؤهلة، وقادرة، ومنتِجة، ومجهَّزة بالمهارات المطلوبة التي تحتاجها
                            شركاتنا الطموحة لتتقدَّم في الأسواق المحلية والدولية.</p>
                    </div>
                </div>
                <img src="{{ asset('image/2-traingol.svg') }}" class="absolute -top-10 -right-10 w-32" alt="">
                <img src="{{ asset('image/cercle-2.svg') }}" class="absolute top-1/2 -left-10 w-32" alt="">
            </div>
        </div>
    </section>

    <section class="py-24 container" id="support_investors">
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="text-white rounded-r-2xl rounded-b-none"
                 style="background: url('{{ asset('image/fish.jpg') }}'); background-size: cover; background-position: top center;">

            </div>
            <div class="text-white bg-primary px-10 py-24 rounded-l-2xl rounded-b-none">
                <div class="relative">
                    <h1 class="text-white font-bold text-2xl z-30 relative">الموارد الطبيعية</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <p class="text-white leading-loose mt-3">
                    تستطيع الشركات الحصول على إمداداتها الجاهزة من المواد الخام نظرًا لما تمتلكه سلطنة عُمان من موارد
                    طبيعية، تشمل النفط، والغاز، والمعادن، والأسماك، والمأكولات البحرية، وغيرها. وبالنسبة إلى الإمدادات
                    التي يجب إحضارها من خارج البلاد، يضمن موقعنا الإستراتيجي وشبكتنا اللوجستية الحصول عليها بكل سهولة،
                    ولأنَّ رسوم الاستيراد لا تُفرض على مكوِّنات الإنتاج والآلات، فإن التكاليف تظل منخفضة.
                </p>
            </div>
            <div class="text-white bg-light-gray px-10 py-24 rounded-r-2xl rounded-t-none">
                <div class="relative">
                    <h1 class="text-primary font-bold text-2xl z-30 relative">أسلوب الحياة</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <p class="text-primary leading-loose mt-3">
                    تُعدُّ سلطنة عُمان مكانًا رائعًا لتأسيس منزل، وتكوين عائلة، وتنمية أعمالك، وتطوير حياتك المهنية.
                    وذلك لما فيها من خيارات إقامة تناسب جميع المتطلبات، ومدارس رائعة، ورعاية صحية عالية الجودة. وعلاوة
                    على ذلك، فإنها تحتوي على مرافق وخيارات ترفيهية من الدرجة الأولى، فضلًا عن بيئة طبيعية خلابة.
                </p>
            </div>
            <div class="text-white rounded-l-2xl rounded-t-none"
                 style="background: url('{{ asset('image/desert.jpeg') }}'); background-size: cover; background-position: top center;">

            </div>
        </div>
    </section>

    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">برنامج إقامة مستثمر</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
            <p class="mt-5">تقدِّم سلطنة عُمان للمستثمرين مزايا تنافسية من خلال برنامج إقامة مستثمر الذي يمنح المستثمرين
                حق الإقامة الطويلة للراغبين بتأسيس ومباشرة أعمالهم في السلطنة، وتتوفر تصاريح الإقامة هذه لمدة خمس وعشر
                سنوات لغير العُمانيين على أساس قابل للتجديد بشرط استيفاء المتقدمين لمعايير محددة.
            </p>
        </div>
        <div class="w-full flex">
            <div class="flex items-center justify-center w-full md:w-1/2">
                <div>
                    <img src="{{ asset('image/goals.svg') }}" alt="">
                </div>
                <div class="flex items-start flex-col w-2/3 rtl:-mr-44 mt-24">
                    <div class="relative text-gray-800 text-center mb-1">
                        <h1 class="text-3xl text-primary font-bold mb-1">الـهــــــدف</h1>
                    </div>
                    <p class="text-md">الهدف من برنامج إقامة مستثمر هو جذب الاستثمار الأجنبي ذو الجدوى الاقتصادية والاجتماعية الذي يسهم بدوره في خلق فرص العمل وتحسين بيئة الأعمال والاستثمار ودعم القطاع الخاص في سلطنة عمان</p>
                </div>
            </div>
            <div class="flex-1 mr-4">
                <div class="grid grid-cols-1 gap-4 mt-6">
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">معلومات حول السوق العالمية وجهات اتصال بها</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">الوصول إلى شبكة دعم دولية من خلال ملحقينا التجاريين وشركائنا الدوليين</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">قاعدة بيانات لفرص التصدير العالمية</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">زيارات للسوق الدولية المموَّلة من الحكومة (يخضع التمويل لمعايير الأهلية)</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">اختيار سوق التصدير وإجراء البحوث اللازمة بشأنها</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">توفير السبل إلى الأسواق الدولية (وكلاء، وموزعون، ومشاريع مشتركة)</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">تقديم المشورة بشأن التجارة الإلكترونية</h1>
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="relative text-primary text-3xl">
                            <i class="fa-solid fa-check z-50 relative"></i>
                            <img class="absolute bottom-0 z-20 w-20 right-2"
                                 src="{{ asset('image/polygon-small-light.svg') }}" alt="">
                        </div>
                        <h1 class="text-lg text-gray-800 mr-4 font-bold">توفير دورات رئيسية مجانية حول مجموعة من موضوعات التصدير المهمة</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">فئات برنامج إقامة مستثمر</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 mt-6">
            <div class="text-white bg-primary p-10 rounded-r-2xl">
                <div class="relative">
                    <h1 class="text-white font-bold text-2xl z-30 relative">الفئة الأولى</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <ul class="list-disc space-y-3">
                    <li>صلاحية برنامج إقامة مستثمر من الفئة الأولى في سلطنة عُمان هي عشر (10) سنوات قابلة للتمديد.</li>
                    <li>بموجب برنامج إقامة مستثمر، تبلغ رسوم الحصول على بطاقة الإقامة العُمانية 500 ريال عُماني (1,295 دولارًا أمريكيًا) لمقدِّم الطلب و100 ريال عُماني (259 دولارًا أمريكيًا) لكل قريب له من الدرجة الأولى.</li>
                    <li>يتم تجديد بطاقة الإقامة إلكترونيًا كل ثلاث (3) سنوات.</li>
                </ul>
            </div>
            <div class="text-white bg-light-gray p-10 rounded-l-2xl">
                <div class="relative">
                    <h1 class="text-primary font-bold text-2xl z-30 relative">الفئة الثانية</h1>
                    <img src="{{ asset('image/traingol.svg') }}" class="absolute right-0 top-0 z-10" alt="">
                </div>
                <ul class="list-disc space-y-3 text-primary">
                    <li>صلاحية برنامج إقامة مستثمر من الفئة الثانية في سلطنة عُمان هي خمس (5) سنوات قابلة للتمديد.</li>
                    <li>بموجب برنامج إقامة مستثمر، تبلغ رسوم الحصول على بطاقة الإقامة العُمانية 300 ريال عُماني (833 دولارًا أمريكيًا) لمقدِّم الطلب و50 ريالًا عُمانيًا (138 دولارًا أمريكيًا) لكل قريب له من الدرجة الأولى.</li>
                    <li>يتم تجديد بطاقة الإقامة إلكترونيًا كل سنتين (2).</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="py-24 container" id="support_investors">
        <div class="relative text-gray-800 text-center mb-10">
            <h1 class="text-3xl font-bold mb-5">الشروط</h1>
            <div class="w-80 h-4 bg-secondary mx-auto -mt-10"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 gap-8 mt-24">
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">يجب على مقدِّم الطلب الالتزام بقوانين سلطنة عُمان لتنظيم الاستثمار.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">يجب ألا يقل عمر المتقدم عن 21 عامًا.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">يجب أن يكون لدى مقدِّم الطلب تأمين صحي ساري المفعول له/ لها وكذلك لأي فرد من أفراد الأسرة المرافقين طوال فترة الإقامة.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">يجب أن يضيف الاستثمار قيمة للاقتصاد العُماني، وذلك حسب تقييم مركز خدمات الاستثمار في وزارة التجارة والصناعة وترويج الاستثمار.
                </h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">لا يمنح برنامج إقامة مستثمر مقدِّم الطلب الحق في الحصول على الجنسية العُمانية.</h1>
            </div>
            <div class="flex flex-col items-start justify-start">
                <div class="flex w-14 h-14 items-center justify-center rounded-full bg-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                         stroke="currentColor" class="w-6 h-6 text-white">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"/>
                    </svg>

                </div>
                <h1 class="text-lg mt-3">تتيح اتفاقيات التجارة الحرة العديدة في سلطنة عُمان للأعمال الوصول إلى أكثر من 750 مليون مستهلك.</h1>
            </div>
        </div>

        <a href="#" class="flex  items-center justify-between space-y-4 bg-gradient-to-tr from-[#E35656] to-[#9B2E2E] rounded-lg mt-11 p-6">
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
        <div class="container bg-secondary rounded-3xl flex items-center justify-between p-10">
            <div class="w-1/3 relative">
                <img src="{{ asset('image/contact.svg') }}" class="rounded" alt="">
                <img src="{{ asset('image/arrow.svg') }}" class="absolute -top-10 -right-10 w-36" alt="">
            </div>
            <div class="flex-1 mr-6">
                <h1 class="text-primary text-3xl font-bold">التواصل مع مستشار علاقات الاستثمار</h1>
                <p class="text-md text-gray-800 mt-3">يمكنك التواصل مع مدير علاقات الاستثمار من فريقنا للحصول على الدعم والمشورة المناسبين لاحتياجاتك. يمكنك إرسال استفساراتك إلى عنوان البريد الإلكتروني invest@tejarah.gov.om أو ملء استمارة التواصل أدناه وسيتم التواصل معك.</p>
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
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                اسم العائلة
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                البريد الإلكتروني *
                            </label>
                            <input type="email" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                تأكيد البريد الإلكتروني *
                            </label>
                            <input type="email" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                الاسم الأولرقم الهاتف *
                            </label>
                            <input type="tel" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                اسم الشركة
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                عنوان النشاط التجاري
                            </label>
                            <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
                        </div>
                        <div class="mb-4">
                            <label for="" class="flex mb-2 text-[#9B2E2E] items-center">
                                <img src="{{ asset('image/polygon-small-dark.svg') }}" alt="">
                                أنا مهتم بـ
                            </label>
                            <div class="relative">
                                <input type="text" class="p-6 bg-white border-0 rounded-lg w-full outline-none" style="box-shadow: 0px 2px 0px #9B2E2E;">
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

</div>
