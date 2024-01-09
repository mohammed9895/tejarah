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

    <x-partials.title title="{{ $page->title }}" mb="mb-5" pb="pb-16"></x-partials.title>

    <div class="container">
        <div class="w-full h-[500px] rounded-2xl" style="background: url('/storage/{{ $page->data['cover'] }}'); background-size: cover; background-position: center center;"></div>
        <div class="mt-10 flex">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-primary ml-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5" />
            </svg>
            <div class="text-gray-600">
                {{ \Carbon\Carbon::parse($page->publishedAt)->diffForHumans() }}
            </div>
        </div>
        <div class="mt-5">
            {!! $page->data['content'] !!}
        </div>
    </div>

</x-dynamic-component>
