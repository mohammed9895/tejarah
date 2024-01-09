<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CmsPageNavigationCategoryResource\Pages;
use App\Filament\Resources\CmsPageNavigationCategoryResource\RelationManagers;
use App\Models\CmsPageNavigationCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CmsPageNavigationCategoryResource extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageNavigationCategoryResource
{
    use \Filament\Resources\Concerns\Translatable;

    protected static ?string $model = CmsPageNavigationCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCmsPageNavigationCategories::route('/'),
            'create' => Pages\CreateCmsPageNavigationCategory::route('/create'),
            'edit' => Pages\EditCmsPageNavigationCategory::route('/{record}/edit'),
        ];
    }

}
