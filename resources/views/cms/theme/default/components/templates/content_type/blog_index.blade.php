@props(['layout', 'page' => null])
@php
    use SolutionForest\FilamentCms\Facades\FilamentCms;

    /** @var array $layout */
    /** @var ?\SolutionForest\FilamentCms\Dto\CmsPageData $page */

   $blogs = \SolutionForest\FilamentCms\Support\Utils::getContentType('blogs')->get();
    $theme = FilamentCms::getCurrentTheme();
@endphp

<x-dynamic-component
    component="filament-cms::{{$theme}}.page"
    :layout="$layout">
    <x-partials.title title="{{ $page->title }}"
                      description="{{ $page->data['content'] }}"></x-partials.title>

    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach($blogs as $blog)
                <div class="shadow-lg rounded-2xl p-4 inline-block" wire:key="{{ $loop->index }}" href="#">
                    <div class="bg-gray-100 w-full h-80 rounded-2xl flex items-center justify-center mb-3" style="background: url('/storage/{{ $blog->data['cover'] }}'); background-size: cover; background-position: center center;">
                    </div>

                    <h1 class="font-bold text-primary text-xl mt-3">{{ $blog->title }}</h1>
                    <p class="text-dark-gray mt-3">
                        {!!  Str::words($blog->data['content'], 40, '') !!}...
                    </p>
                    <a href="/blogs/{{ $blog->slug }}" class="inline-block bg-primary p-3 rounded mt-4 text-white">{{ __('global.blog.read-more') }}</a>
                </div>
            @endforeach
        </div>
    </div>
</x-dynamic-component>
