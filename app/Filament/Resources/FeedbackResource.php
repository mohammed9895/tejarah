<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('rating')
                    ->badge()
                    ->formatStateUsing(fn(int $state): string => match ($state) {
                        1 => 'Poor',
                        2 => 'Fair',
                        3 => 'Good',
                        4 => 'Very Good',
                        5 => 'Excellent',
                        default => 'none',
                    })
                    ->color(fn(int $state): string => match ($state) {
                        1 => 'danger',
                        2 => 'alert',
                        3 => 'gray',
                        4 => 'info',
                        5 => 'success',
                        default => 'none',
                    }),
                Tables\Columns\TextColumn::make('message')
                    ->formatStateUsing(fn(string $state): string =>  empty($state) ? 'No Message' : $state)
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [

        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFeedback::route('/'),
        ];
    }
}
