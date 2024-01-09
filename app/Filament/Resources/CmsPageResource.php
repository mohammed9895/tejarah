<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CmsPageResource\Pages;
use App\Filament\Resources\CmsPageResource\RelationManagers;
use App\Models\CmsPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CmsPageResource extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource
{
    use \Filament\Resources\Concerns\Translatable;
    protected static ?string $model = CmsPage::class;
    public static function getTranslatableLocales(): array
    {
        return ['ar', 'en'];
    }
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListCmsPages::route('/'),
            'create' => Pages\CreateCmsPage::route('/create'),
            'edit' => Pages\EditCmsPage::route('/{record}/edit'),
        ];
    }
}
