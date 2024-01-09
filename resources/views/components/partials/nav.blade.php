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
                    <li><a href="{{ route('about') }}" wire:navigate>من نحن</a></li>
                    <li><a href="{{ route('invest-in-oman') }}" wire:navigate>استثمر في عمان</a></li>
                    <li><a href="{{ route('why-oman') }}">لماذا سلطنة عمان</a></li>
                    <li><a href="#">التشريعات</a></li>
                    <li><a href="#">المركز الأعلامي</a></li>
                    <li><a href="#" class="bg-primary text-white rounded-full px-4 py-2">اتصل بنا</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
