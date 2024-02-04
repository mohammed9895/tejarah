
@php
    $menu = \SolutionForest\FilamentCms\Facades\FilamentCms::getNavigation('footer') ?? [];
@endphp
<livewire:rating-form />
<footer class="relative bg-light-gray pt-48">
    <div class="container flex justify-between items- flex-col md:flex-row space-y-5">
        <div class="w-1/3">
            <a href="/"><img src="{{ asset('image/logo.svg') }}" alt=""></a>
            <p class="text-gray-600 mt-3">
               {{__('global.address-full-tejarah')}}
            </p>
            <div class="flex space-x-3 rtl:space-x-3 rtl:space-x-reverse mt-3">
                <a href="https://twitter.com/tejarah_om" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-x"></i></a>
                <a href="https://www.youtube.com/channel/UCXd3XBW70tAfqPvnZs2a-Yw" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-youtube"></i></a>
                <a href="https://www.instagram.com/tejarah_om/" class="inline-block rounded text-primary bg-secondary w-8 h-8 text-center leading-loose"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <div class="ml-10">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-10">
                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">{{__('global.menu.about-us')}} </h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="/about-us#general-directorates">{{ __('messages.general_directorates') }}</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="/about-us#subsidiary-directorates-and-departments">{{ __('messages.affiliated_directorates_and_departments') }}</a>
                        </li>
                    </ul>
                </div><div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">{{ __('messages.services') }}</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="/invest-in-oman-page">{{ __('global.e_services') }}</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="/whyoman#investor-residency-program">{{ __('global.investor-residency-program') }}</a>
                        </li>
                    </ul>
                </div>
                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">{{ __('messages.important_links') }}</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="/blogs">{{ __('messages.news') }}</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="/informations">{{ __('messages.information_bank') }}</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="/about-us">{{ __('messages.frequent_questions') }}</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="/legislation">{{ __('global.menu.legislation') }}</a>
                        </li>
                    </ul>
                </div>

                <div class="flex flex-col">
                    <h1 class="mb-5 text-lg font-bold text-primary">{{__('global.menu.contact-us')}}</h1>
                    <ul class="space-y-3">
                        <li class="text-gray-600">
                            <a href="tel:+968 80000070" dir="ltr">+968 80000070</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="mailto:info@tejarah.gov.om">info@tejarah.gov.om</a>
                        </li>
                        <li class="text-gray-600">
                            <a href="mailto:ask@tejarah.gov.om">ask@tejarah.gov.om</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="py-6 items-center border-t border-gray-300 mt-6">
            <div class="flex justify-between">
                <div>
                    <p class="text-gray-600">{{ __('messages.all_rights_reserved') }}</p>
                </div>
                <div class="flex space-x-3 space-x-reverse">
                    <a href="#">{{ __('messages.terms_and_conditions') }}</a>
                    <a href="#">{{ __('messages.privacy_policy') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>

