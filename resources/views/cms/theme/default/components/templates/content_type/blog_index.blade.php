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
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            <x-blogs :blogs="$blogs" />
        </div>
    </div>
</x-dynamic-component>
