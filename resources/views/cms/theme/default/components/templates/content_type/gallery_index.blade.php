@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */


    $galleries = \SolutionForest\FilamentCms\Support\Utils::getContentType('galleries')->get();

    $theme = FilamentCms::getCurrentTheme();
@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="{{ asset('css/uikit.css') }}"/>

    <x-partials.title title="{{ $page->title }}"
                      description="{{ $page->data['content'] ?? '' }}"></x-partials.title>


    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">

            @foreach($galleries as $gallery)
                <div class="shadow-lg rounded-2xl p-4 inline-block" wire:key="{{ $loop->index }}" href="#">
                    <div class="w-full h-80 rounded-2xl mb-3 relative"
                         style="background: url('/storage/{{ $gallery->data['images'][0] }}'); background-size: cover; background-position: center center;">
                        <div
                            class="absolute top-2 left-3 inline-block p-2 rounded-xl text-white bg-black/40">{{ count($gallery->data['images']) }} {{ __('global.images-count') }}</div>
                    </div>

                    <h1 class="font-bold text-primary text-xl mt-3">{!!  $gallery->data['caption']  !!}</h1>
                    <div uk-lightbox>
                        <a href="{{ '/storage/' . $gallery->data['images'][0]}}"
                           data-caption="{{ $gallery->data['caption'] }}"
                           class="cursor-pointer inline-block bg-primary p-3 rounded  text-white hover:decoration-0 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-6 h-6 inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z"/>
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                            </svg>
                            {{ __('global.show-images') }}
                        </a>
                        @foreach($gallery->data['images'] as $image)
                            <a href="{{  '/storage/' . $image}}" data-caption="{{ $gallery->data['caption'] }}"></a>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- UIkit JS -->
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>

</x-dynamic-component>
