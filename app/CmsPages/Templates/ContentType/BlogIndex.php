<?php

namespace App\CmsPages\Templates\ContentType;

use Filament\Forms;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Templates\IndexContentTypeTemplate as BaseTemplate;

class BlogIndex extends BaseTemplate implements CmsPageTemplate
{
    public static function schema(): array
    {
        return [
            Forms\Components\TextInput::make('content')
        ];
    }

    public static function title(): string
    {
        return 'BlogIndex';
    }

    public static function getIndexPageKey()
    {
        return '8';
    }
}
