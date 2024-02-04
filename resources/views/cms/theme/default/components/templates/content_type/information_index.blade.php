@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */

    $informations = \SolutionForest\FilamentCms\Support\Utils::getContentType('informations')->get();

    $theme = FilamentCms::getCurrentTheme();
@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">
    <x-partials.title title="{{ $page->title }}"
                      description="{{ $page->data['content'] ?? '' }}"></x-partials.title>

    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            @foreach($informations as $information)
                <div class="shadow-lg rounded-2xl p-4 flex flex-col items-center justify-center" wire:key="{{ $loop->index }}" href="#">
                    <div class="bg-gray-100 w-20 h-20 rounded-2xl flex items-center justify-center mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke-width="1.5"
                             stroke="currentColor" class="w-14 text-primary h-14 mx-auto">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                  d="M19.5 14.25v-2.625a3.375 3.375 0 0 0-3.375-3.375h-1.5A1.125 1.125 0 0 1 13.5 7.125v-1.5a3.375 3.375 0 0 0-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 0 0-9-9Z"/>
                        </svg>
                    </div>
                    <h1 class="font-bold text-primary text-xl mt-3">{{ $information->title }}</h1>
                    <a href="{{ url('/storage/' . $information->data['file']) }}" target="_blank" class="bg-secondary w-full flex p-3 rounded mt-5 justify-center text-primary hover:text-secondary hover:bg-primary transition-all">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 ml-1">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 7.5h-.75A2.25 2.25 0 0 0 4.5 9.75v7.5a2.25 2.25 0 0 0 2.25 2.25h7.5a2.25 2.25 0 0 0 2.25-2.25v-7.5a2.25 2.25 0 0 0-2.25-2.25h-.75m-6 3.75 3 3m0 0 3-3m-3 3V1.5m6 9h.75a2.25 2.25 0 0 1 2.25 2.25v7.5a2.25 2.25 0 0 1-2.25 2.25h-7.5a2.25 2.25 0 0 1-2.25-2.25v-.75" />
                        </svg>
                        <div class="">{{ __('global.download') }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</x-dynamic-component>
