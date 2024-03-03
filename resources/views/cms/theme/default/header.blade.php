@php
    $menu = \SolutionForest\FilamentCms\Facades\FilamentCms::getNavigation('main-menu') ?? [];
@endphp
<nav class="">
    <nav class="mb-10 relative z-50" id="nav-bar">
        <div class="container flex flex-wrap items-center justify-between mx-auto pt-6 relative">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logo.svg') }}" class="h-12" alt="">
            </a>
            <button data-collapse-toggle="navbar-default" id="hamburger-menu" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 "
                    aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto absolute top-20 left-0 md:static z-50" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent ">
                    <li>
                        <a href="/"
                           class="block py-2 px-3 text-white bg-primary rounded md:bg-transparent md:text-primary md:p-0 "
                           aria-current="page" wire:navigate>
                            {{ __('global.menu.home') }}
                        </a>
                    </li>
                    <li>
                        <a href="/about-us"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0"
                           wire:navigate>

                            {{ __('global.menu.about-us') }}
                        </a>
                    </li>
                    <li>
                        <a href="/invest-in-oman-page"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 "
                           wire:navigate>
                            {{ __('global.menu.invest-in-oman') }}</a>
                    </li>
                    <li>
                        <a href="/whyoman"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 "
                           wire:navigate>
                            {{ __('global.menu.why-oman') }}  </a>
                    </li>
                    <li>
                        <a href="/legislation"
                           class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0"
                           wire:navigate>
                            {{ __('global.menu.legislation') }}</a>
                    </li>

                    <div @click.away="open = false" class="relative z-50" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0">
                            <span>{{ __('global.menu.media-center') }}</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 mt-2">
                                <a class="block px-4 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-white hover:bg-primary focus:bg-primary focus:outline-none focus:shadow-outline" href="/blogs" wire:navigate>{{ __('global.menu.news') }}</a>
                                <a class="block px-4 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-white hover:bg-primary focus:bg-primary focus:outline-none focus:shadow-outline" href="/informations" wire:navigate>{{ __('global.menu.information-bank') }}</a>
                                <a class="block px-4 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-white hover:bg-primary focus:bg-primary focus:outline-none focus:shadow-outline" href="/galleries" wire:navigate>{{ __('global.menu.gallery') }}</a>
                            </div>
                        </div>
                    </div>

                    <div @click.away="open = false" class="relative z-50" x-data="{ open: false }">
                        <button @click="open = !open" class="flex flex-row items-center w-full block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0">
                            <span>{{ __('global.menu.suggestions_and_complaints') }}</span>
                            <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800 mt-2">
                                <a class="block px-4 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-white hover:bg-primary focus:bg-primary focus:outline-none focus:shadow-outline" href="/suggestions" wire:navigate>{{ __('global.menu.suggestions') }}</a>
                                <a class="block px-4 py-2 mt-2 text-sm  bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-white focus:text-white hover:bg-primary focus:bg-primary focus:outline-none focus:shadow-outline" href="/complaint" wire:navigate>{{ __('global.menu.complaints') }}</a>
                            </div>
                        </div>
                    </div>

                    <li>
                        <a href="/contact-us" wire:navigate
                           class="bg-primary text-white rounded-full px-4 py-2 inline-block mt-3 md:inline md:mt-0">
                            {{ __('global.menu.contact-us') }}
                        </a>
                    </li>
                    @if (app()->getLocale() == 'en')
                        <li>
                            <a href="{{ route('language.switch', 'ar') }}"
                               class="bg-primary text-white rounded-full px-4 py-2 inline-block mt-3 md:inline md:mt-0">
                                ع
                            </a>
                        </li>
                        ِ
                    @else
                        <li>
                            <a href="{{ route('language.switch', 'en') }}"
                               class="bg-primary text-white rounded-full px-4 py-2 inline-block mt-3 md:inline md:mt-0">
                                E
                            </a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

</nav>
