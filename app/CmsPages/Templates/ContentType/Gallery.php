<?php

namespace App\CmsPages\Templates\ContentType;

use Filament\Forms;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Templates\ContentTypeTemplate as BaseTemplate;

class Gallery extends BaseTemplate implements CmsPageTemplate
{
    public static function schema(): array
    {
        return [
            Forms\Components\RichEditor::make('caption')->label(__('dashboard/galleries.caption')),
            Forms\Components\FileUpload::make('images')->multiple()->image()->directory('galleries')->label(__('dashboard/galleries.images'))
        ];
    }

    public static function title(): string
    {
        return 'Gallery';
    }
}
