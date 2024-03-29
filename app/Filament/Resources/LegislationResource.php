<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LegislationResource\Pages;
use App\Filament\Resources\LegislationResource\RelationManagers;
use App\Models\Legislation;
use App\Models\LegislationCategory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LegislationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Legislation::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?string $navigationGroup = 'Legislations';

    public static function getNavigationGroup(): ?string
    {
        return __('dashboard/legislations.legislations'); // TODO: Change the autogenerated stub
    }

    public static function getPluralLabel(): ?string
    {
        return __('dashboard/legislations.legislations'); // TODO: Change the autogenerated stub
    }

    public static function getLabel(): ?string
    {
        return __('dashboard/legislations.legislation'); // TODO: Change the autogenerated stub
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('dashboard/legislations.title')),
                Forms\Components\RichEditor::make('description')->label(__('dashboard/legislations.description')),
                Forms\Components\DatePicker::make('year')->native(false)->label(__('dashboard/legislations.year')),
                Forms\Components\Select::make('legislation_category_id')
                    ->label(__('dashboard/legislations.category'))
                    ->options(LegislationCategory::all()->pluck('name', 'id'))->searchable(),
                Forms\Components\FileUpload::make('file')->label(__('dashboard/legislations.file')),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label(__('dashboard/legislations.title')),
                Tables\Columns\TextColumn::make('legislationCategory.name')->label(__('dashboard/legislations.category')),
                Tables\Columns\TextColumn::make('year')->label(__('dashboard/legislations.year'))->date('Y'),
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
            'index' => Pages\ListLegislations::route('/'),
            'create' => Pages\CreateLegislation::route('/create'),
            'edit' => Pages\EditLegislation::route('/{record}/edit'),
        ];
    }
}
