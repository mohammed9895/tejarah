@php
    $menu = \SolutionForest\FilamentCms\Facades\FilamentCms::getNavigation('main-menu') ?? [];
@endphp
<nav class="" >
    <div class="container">
        <div class="flex justify-between items-center py-10">
            <div>
                <a href="/">
                    <img src="{{ asset('image/logo.svg') }}" width="300" alt="">
                </a>
            </div>
            <div>
                <ul class="flex space-x-5 rtl:space-x-5 rtl:space-x-reverse">
                    <li><a href="/">الرئيسية</a></li>
                    <li><a href="/about-us" wire:navigate>من نحن</a></li>
                    <li><a href="/invest-in-oman-page" wire:navigate>استثمر في عمان</a></li>
                    <li><a href="/whyoman" wire:navigate>لماذا سلطنة عمان</a></li>
                    <li><a href="/legislation" wire:navigate>التشريعات</a></li>
                    <li><a href="/blogs" wire:navigate>المركز الأعلامي</a></li>
                    <li><a href="#" class="bg-primary text-white rounded-full px-4 py-2">اتصل بنا</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
