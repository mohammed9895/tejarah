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

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title'),
                Forms\Components\RichEditor::make('description'),
                Forms\Components\DatePicker::make('year')->native(false),
                Forms\Components\Select::make('legislation_category_id')
                    ->options(LegislationCategory::all()->pluck('name', 'id'))->searchable(),
                Forms\Components\FileUpload::make('file'),
            ])->columns(1);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('legislationCategory.name'),
                Tables\Columns\TextColumn::make('year'),
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
