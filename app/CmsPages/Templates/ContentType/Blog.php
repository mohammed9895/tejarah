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
            Forms\Components\RichEditor::make('content'),
            Forms\Components\FileUpload::make('cover')->imageEditor(),
        ];
    }

    public static function title(): string
    {
        return 'Blog';
    }
}
