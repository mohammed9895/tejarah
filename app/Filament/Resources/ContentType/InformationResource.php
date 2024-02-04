<?php

namespace App\Filament\Resources\ContentType;

use App\Filament\Resources\ContentType\InformationResource\Pages;
use App\CmsPages\Templates\ContentType\Information as Template;
use Filament\Forms;
use Illuminate\Database\Eloquent\Builder;
use SolutionForest\FilamentCms\Enums\PageType;
use SolutionForest\FilamentCms\Filament\Resources\ContentTypePageBaseResource as BaseResource;

class InformationResource extends BaseResource
{
     use \Filament\Resources\Concerns\Translatable;

    protected static ?int $navigationSort = null;

    protected static $parentPageKey = '18';

    protected static string $subSlug = 'informations';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Information';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInformation::route('/'),
            'edit' => Pages\EditInformation::route('/{record:id}/edit'),
            'create' => Pages\CreateInformation::route('/create'),
        ];
    }

    public static function getTemplate(): string
    {
        return Template::class;
    }
}