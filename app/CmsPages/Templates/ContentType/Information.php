<?php

namespace App\CmsPages\Templates\ContentType;

use Filament\Forms;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Templates\ContentTypeTemplate as BaseTemplate;

class Information extends BaseTemplate implements CmsPageTemplate
{
    public static function schema(): array
    {
        return [
            Forms\Components\TextInput::make('title')->label(__('dashboard/informations.title')),
            Forms\Components\FileUpload::make('file')->directory('information')->label(__('dashboard/informations.file')),
        ];
    }

    public static function title(): string
    {
        return 'Information';
    }
}
