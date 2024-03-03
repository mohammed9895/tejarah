<?php

namespace App\CmsPages\Templates\ContentType;

use Filament\Forms;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Templates\ContentTypeTemplate as BaseTemplate;

class Blog extends BaseTemplate implements CmsPageTemplate
{
    public static function schema(): array
    {
        return [
            Forms\Components\RichEditor::make('content')->label(__('dashboard/blogs.content')),
            Forms\Components\FileUpload::make('cover')->imageEditor()->label(__('dashboard/blogs.cover')),
        ];
    }

    public static function title(): string
    {
        return __('dashboard/blogs.blogs');
    }
}
