@php
    $menu = \SolutionForest\FilamentCms\Facades\FilamentCms::getNavigation('main-menu') ?? [];
@endphp
<nav class="" >



    <!-- Target element -->
    <div id="targetEl" class="hidden">
        <ul
            class="w-48 rounded-lg  border border-gray-200 bg-white text-sm text-gray-900 dark:border-gray-600 dark:bg-gray-700 dark:text-white"
        >
            <li
                class="w-full rounded-t-lg border-b border-gray-200 px-4 py-2 dark:border-gray-600"
            >
                Profile
            </li>
            <li
                class="w-full border-b border-gray-200 px-4 py-2 dark:border-gray-600"
            >
                Settings
            </li>
            <li
                class="w-full border-b border-gray-200 px-4 py-2 dark:border-gray-600"
            >
                Messages
            </li>
            <li class="w-full rounded-b-lg px-4 py-2">Download</li>
        </ul>
    </div>
        <nav class="bg-white border-gray-200 dark:bg-gray-900 mb-10" id="nav-bar">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 relative">
                <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="{{ asset('image/logo.svg') }}" class="h-12" alt="">
                </a>
                <button data-collapse-toggle="navbar-default" id="hamburger-menu" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                    </svg>
                </button>
                <div class="hidden w-full md:block md:w-auto absolute top-20 left-0 md:static z-50" id="navbar-default">
                    <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 dark:border-gray-700">
                        <li>
                            <a href="/" class="block py-2 px-3 text-white bg-primary rounded md:bg-transparent md:text-primary md:p-0 dark:text-white md:dark:text-blue-500" aria-current="page" wire:navigate>الرئيسية</a>
                        </li>
                        <li>
                            <a href="/about-us" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" wire:navigate>من نحن</a>
                        </li>
                        <li>
                            <a href="/invest-in-oman-page" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" wire:navigate>استثمر في عُمان</a>
                        </li>
                        <li>
                            <a href="/whyoman" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" wire:navigate>لماذا سلطنة عُمان</a>
                        </li>
                        <li>
                            <a href="/legislation" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" wire:navigate>التشريعات</a>
                        </li>
                        <li>
                            <a href="/blogs" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-primary md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent" wire:navigate>المركز الأعلامي</a>
                        </li>
                        <li>
                            <a href="#" class="bg-primary text-white rounded-full px-4 py-2 inline-block mt-3 md:inline md:mt-0">توصل معنا</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

</nav>
