<div>
    <section class="relative mt-52 z-50">
        <div class="w-full md:w-2/3 container px-10 flex items-center justify-center before:content-[''] before:w-full before:h-96 md:before:w-1/2 before:absolute before:top-1/2 md:before:right-0 before:bottom-0 before:left-1/2 before:transform before:-translate-x-1/2 before:-translate-y-1/2 before:bg-secondary md:before:rotate-[2deg] before:rounded-3xl before:-z-20
        after:content-[''] after:w-full after:h-96 md:after:w-1/2 after:absolute after:top-1/2 md:after:right-0 after:bottom-0 after:left-1/2 after:transform after:-translate-x-1/2 after:-translate-y-1/2 after:bg-primary md:after:rotate-[-2deg] after:rounded-3xl
         after:-z-10">
            <div class="w-full md:ltr:w-[50%] md:rtl:w-[50%]">
                <h1 class="text-center text-white font-bold text-2xl md:text-4xl mx-auto md:pt-10">
                    <div>{{__('global.join-maillist')}}</div>
                    <div class="mt-6 ltr:hidden">{{__('global.to-recive-news')}}</div>
                </h1>
                <div class="flex items-center justify-center mt-7 space-x-5 space-x-reverse ltr:space-x-5 ">
                    <button wire:click="ratingChange(1)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.002" height="44.002"
                             viewBox="0 0 44.002 44.002"
                             class="fill-secondary hover:scale-125 transition-all rounded-full @if($rating == 1) bg-red-600 scale-125 fill-black @endif">
                            <path id="d5f5cad8a60e19a0d5fa7322c68d735f"
                                  d="M23,1A22,22,0,1,1,1,23,22,22,0,0,1,23,1Zm0,42.708A20.707,20.707,0,1,0,2.294,23,20.707,20.707,0,0,0,23,43.708Zm2.1-23.084a.647.647,0,1,1,1.059-.743,8.446,8.446,0,0,0,9.076,3.3c.163-.043.322-.091.48-.144a.647.647,0,0,1,.409,1.228q-.275.091-.554.167A9.73,9.73,0,0,1,25.1,20.624ZM10.3,23.039c.158.053.317.1.479.144a8.445,8.445,0,0,0,9.077-3.3.647.647,0,1,1,1.059.743,9.739,9.739,0,0,1-10.471,3.81q-.279-.076-.554-.167a.647.647,0,0,1,.409-1.228ZM23,29.472c3.634,0,6.82,2.869,7.749,6.975a.647.647,0,0,1-1.261.286c-.795-3.513-3.463-5.967-6.487-5.967s-5.692,2.453-6.487,5.967a.646.646,0,0,1-.631.5.619.619,0,0,1-.143-.016.645.645,0,0,1-.488-.773C16.181,32.341,19.368,29.472,23,29.472Z"
                                  transform="translate(-1 -1)"/>
                        </svg>
                    </button>
                    <button wire:click="ratingChange(2)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.002" height="44.002"
                             viewBox="0 0 44.002 44.002"
                             class="fill-secondary hover:scale-125 transition-all rounded-full @if($rating == 2) bg-orange-500 scale-125 fill-black @endif">
                            <path id="_2e5f7a6074f846ab36f24ebd2cd8649d" data-name="2e5f7a6074f846ab36f24ebd2cd8649d"
                                  d="M23,1A22,22,0,1,1,1,23,22,22,0,0,1,23,1Zm0,42.708A20.707,20.707,0,1,0,2.294,23,20.707,20.707,0,0,0,23,43.708ZM29.472,23c-2.141,0-3.883-2.322-3.883-5.177s1.742-5.177,3.883-5.177,3.883,2.322,3.883,5.177S31.613,23,29.472,23Zm0-9.059c-1.4,0-2.588,1.778-2.588,3.883s1.185,3.883,2.588,3.883,2.588-1.778,2.588-3.883S30.875,13.942,29.472,13.942ZM16.53,12.648c2.141,0,3.883,2.322,3.883,5.177S18.671,23,16.53,23s-3.883-2.322-3.883-5.177S14.389,12.648,16.53,12.648Zm0,9.059c1.4,0,2.588-1.778,2.588-3.883s-1.185-3.883-2.588-3.883-2.588,1.778-2.588,3.883S15.127,21.707,16.53,21.707Zm.683,10.579c.231-.579,3.519-2.377,5.643-2.354a10.024,10.024,0,0,1,5.592,2.474,1.382,1.382,0,0,1,.271.989.8.8,0,0,1-.693.285c-.492-.014-3-2.352-4.949-2.446s-4.544,2.113-5.143,2.161-.722-.3-.722-.3S16.983,32.864,17.214,32.286Zm-6.77-21.053a4.206,4.206,0,0,0,2.919-.623A4.575,4.575,0,0,0,15.094,8.04a.647.647,0,1,1,1.239.372,5.9,5.9,0,0,1-2.239,3.267,5.292,5.292,0,0,1-3.024.884,6.7,6.7,0,0,1-.772-.045.647.647,0,1,1,.147-1.285ZM29.162,8.411a.648.648,0,0,1,1.241-.37,4.563,4.563,0,0,0,1.729,2.569,4.2,4.2,0,0,0,2.921.623.647.647,0,0,1,.147,1.285,6.7,6.7,0,0,1-.771.045,5.3,5.3,0,0,1-3.027-.884A5.9,5.9,0,0,1,29.162,8.411Z"
                                  transform="translate(-1 -1)"/>
                        </svg>
                    </button>
                    <button wire:click="ratingChange(3)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.002" height="44.002"
                             viewBox="0 0 44.002 44.002"
                             class="fill-secondary hover:scale-125 transition-all rounded-full @if($rating == 3) bg-yellow-500 scale-125 fill-black @endif">
                            <path id="_05a9677441cb2ee58c2d4517dc9c541d" data-name="05a9677441cb2ee58c2d4517dc9c541d"
                                  d="M43.237,14.47a4.886,4.886,0,0,0,.385-.366,5.032,5.032,0,0,0,.249-6.142l-4.329-6.1a.636.636,0,0,0-.585-.27.648.648,0,0,0-.528.367L36.622,5.773a21.879,21.879,0,1,0,6.615,8.7ZM37.4,7.17c.467-.96.6-1.273.834-1.662a9.936,9.936,0,0,0,.9-2l3.689,5.2a3.734,3.734,0,1,1-6.418.561A15.85,15.85,0,0,1,37.4,7.17ZM22.946,43.688A20.707,20.707,0,1,1,36.052,6.975l-.826,1.742a5,5,0,0,0,6.926,6.553A20.684,20.684,0,0,1,22.946,43.688ZM13.239,19.1a.647.647,0,0,0,.647-.647c0-2.455,1.185-4.53,2.588-4.53s2.588,2.075,2.588,4.53a.647.647,0,0,0,1.294,0c0-3.266-1.7-5.824-3.883-5.824s-3.883,2.558-3.883,5.824a.647.647,0,0,0,.647.647Zm12.942,0a.647.647,0,0,0,.647-.647c0-2.413,1.21-4.53,2.588-4.53S32,16.038,32,18.451a.647.647,0,0,0,1.294,0c0-3.211-1.742-5.824-3.883-5.824s-3.883,2.612-3.883,5.824a.647.647,0,0,0,.647.647Zm10.353,9.059H9.357a.647.647,0,0,0-.647.647,10.734,10.734,0,0,0,.358,2.755v0h0c1.5,5.526,7.332,9.537,13.877,9.537s12.382-4.011,13.878-9.54a10.734,10.734,0,0,0,.358-2.755.647.647,0,0,0-.647-.647ZM22.946,39.805c-5.64,0-10.686-3.221-12.363-7.765H35.308C33.63,36.585,28.585,39.805,22.946,39.805Zm12.76-9.2c-.009.045-.02.091-.029.136H10.215c-.01-.046-.021-.091-.029-.138a9.473,9.473,0,0,1-.16-1.157H35.866a9.486,9.486,0,0,1-.161,1.158Z"
                                  transform="translate(-1.189 -1.069)"/>
                        </svg>
                    </button>
                    <button wire:click="ratingChange(4)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.002" height="44.002"
                             viewBox="0 0 44.002 44.002"
                             class="fill-secondary hover:scale-125 transition-all rounded-full @if($rating == 4) bg-lime-500 scale-125 fill-black @endif">
                            <path id="_5d68104e1198ee276c0cb9a1a2ca36fa" data-name="5d68104e1198ee276c0cb9a1a2ca36fa"
                                  d="M23,1A22,22,0,1,1,1,23,22,22,0,0,1,23,1Zm0,42.708A20.707,20.707,0,1,0,2.294,23,20.707,20.707,0,0,0,23,43.708Zm3.637-22.265a.647.647,0,0,1-.8-1.014,5.685,5.685,0,0,1,3.623-1.309,6.056,6.056,0,0,1,3.655,1.436.647.647,0,0,1-.811,1.009,4.718,4.718,0,0,0-2.869-1.15,4.477,4.477,0,0,0-2.794,1.029ZM16.516,19.12a6.056,6.056,0,0,1,3.655,1.436.647.647,0,0,1-.811,1.009,4.718,4.718,0,0,0-2.869-1.15A4.5,4.5,0,0,0,13.7,21.443a.647.647,0,0,1-.8-1.014A5.715,5.715,0,0,1,16.516,19.12ZM27.8,13.363a.647.647,0,1,1-.508-1.191,10.157,10.157,0,0,1,4.951-.808,9.942,9.942,0,0,1,4.689,1.707.647.647,0,1,1-.725,1.072,8.649,8.649,0,0,0-4.082-1.49A8.874,8.874,0,0,0,27.8,13.363Zm-14.046-2a10.155,10.155,0,0,1,4.95.808.647.647,0,0,1-.508,1.191,8.881,8.881,0,0,0-4.324-.709,8.649,8.649,0,0,0-4.082,1.49.647.647,0,0,1-.725-1.072,9.942,9.942,0,0,1,4.689-1.707Zm2.283,19.424a.649.649,0,0,1,.792.456,6.4,6.4,0,0,0,12.34,0,.647.647,0,1,1,1.249.336,7.694,7.694,0,0,1-14.838,0,.646.646,0,0,1,.456-.792Z"
                                  transform="translate(-1 -1)"/>
                        </svg>
                    </button>
                    <button wire:click="ratingChange(5)">
                        <svg xmlns="http://www.w3.org/2000/svg" width="44.002" height="44.002"
                             viewBox="0 0 44.002 44.002"
                             class="fill-secondary hover:scale-125 transition-all rounded-full  @if($rating == 5) bg-green-600 scale-125 fill-black @endif">
                            <path id="_47815f06253a7e3aab611e9205e02636" data-name="47815f06253a7e3aab611e9205e02636"
                                  d="M23,1A22,22,0,1,1,1,23,22,22,0,0,1,23,1Zm0,42.708A20.707,20.707,0,1,0,2.294,23,20.707,20.707,0,0,0,23,43.711Zm11-23.3a.647.647,0,0,1-.647-.647c0-2.455-1.481-4.53-3.235-4.53s-3.235,2.075-3.235,4.53a.647.647,0,1,1-1.294,0c0-3.211,2.032-5.824,4.53-5.824s4.53,2.612,4.53,5.824a.647.647,0,0,1-.647.647Zm-14.236,0a.647.647,0,0,1-.647-.647c0-2.455-1.481-4.53-3.235-4.53s-3.235,2.075-3.235,4.53a.647.647,0,0,1-1.294,0c0-3.211,2.032-5.824,4.53-5.824s4.53,2.612,4.53,5.824a.647.647,0,0,1-.647.647ZM9.412,28.181H36.59a.647.647,0,0,1,.647.647,10.723,10.723,0,0,1-.359,2.758c-1.5,5.526-7.332,9.537-13.877,9.537s-12.382-4.011-13.878-9.54a10.735,10.735,0,0,1-.358-2.755.647.647,0,0,1,.647-.647Zm.961,3.066C11.719,36.22,17.029,39.829,23,39.829S34.284,36.22,35.628,31.25a9.43,9.43,0,0,0,.293-1.775H10.081a9.48,9.48,0,0,0,.292,1.772Z"
                                  transform="translate(-1 -1.003)"/>
                        </svg>
                    </button>
                </div>
                <div class="mt-6 relative">
                    <form method="POST" wire:submit="send">
                        @csrf
                        <input type="text" wire:model="message" placeholder="{{ __('global.rate_input_placeholder') }}"
                               class="placeholder-gray-500 w-full p-5 rounded-lg outline-0 max-w-full">
                        <button
                            class="absolute left-2 ltr:left-auto ltr:right-2 top-2 bg-primary rounded-lg text-white py-3 px-6">{{__('global.subscribe')}}
                            <i class="fa-regular fa-paper-plane"></i></button>
                    </form>
                    <div class="mt-3 text-white">
                        @if(session('error'))
                            {{ session('error') }}
                        @endif
                        @if(session('success'))
                            {{ session('success') }}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
