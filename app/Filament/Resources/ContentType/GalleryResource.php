<?php

namespace App\Filament\Resources\ContentType;

use App\Filament\Resources\ContentType\GalleryResource\Pages;
use App\CmsPages\Templates\ContentType\Gallery as Template;
use Filament\Forms;
use Illuminate\Database\Eloquent\Builder;
use SolutionForest\FilamentCms\Enums\PageType;
use SolutionForest\FilamentCms\Filament\Resources\ContentTypePageBaseResource as BaseResource;

class GalleryResource extends BaseResource
{
    use \Filament\Resources\Concerns\Translatable;

    protected static ?int $navigationSort = null;

    protected static $parentPageKey = '15';

    protected static string $subSlug = 'galleries';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getModelLabel(): string
    {
        return 'Gallery';
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleries::route('/'),
            'edit' => Pages\EditGallery::route('/{record:id}/edit'),
            'create' => Pages\CreateGallery::route('/create'),
        ];
    }

    public static function getTemplate(): string
    {
        return Template::class;
    }
}
