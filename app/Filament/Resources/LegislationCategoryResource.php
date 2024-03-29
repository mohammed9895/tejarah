<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegislationCategoryResource\Pages;
use App\Filament\Resources\LegislationCategoryResource\RelationManagers;
use App\Models\LegislationCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LegislationCategoryResource extends Resource
{
    use Translatable;
    protected static ?string $model = LegislationCategory::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Legislations';

    public static function getNavigationGroup(): ?string
    {
        return __('dashboard/legislations.legislations'); // TODO: Change the autogenerated stub
    }

    public static function getPluralLabel(): ?string
    {
        return __('dashboard/legislations.categories'); // TODO: Change the autogenerated stub
    }

    public static function getLabel(): ?string
    {
        return __('dashboard/legislations.category'); // TODO: Change the autogenerated stub
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->label(__('dashboard/legislations.name')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLegislationCategories::route('/'),
            'create' => Pages\CreateLegislationCategory::route('/create'),
            'edit' => Pages\EditLegislationCategory::route('/{record}/edit'),
        ];
    }
}
