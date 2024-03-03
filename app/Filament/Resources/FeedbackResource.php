<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeedbackResource\Pages;
use App\Filament\Resources\FeedbackResource\RelationManagers;
use App\Models\Feedback;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\Summarizers\Average;
use Filament\Tables\Columns\Summarizers\Count;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FeedbackResource extends Resource
{
    protected static ?string $model = Feedback::class;

    protected static ?string $navigationIcon = 'heroicon-o-star';

    public static function getLabel(): ?string
    {
        return __('dashboard/feedbacks.feedback');
    }

    public static function getPluralLabel(): string
    {
        return __('dashboard/feedbacks.feedbacks');
    }

    public static function singularLabel(): ?string
    {
        return __('dashboard/feedbacks.feedback');
    }




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
                        1 => __('dashboard/feedbacks.ratings.1'),
                        2 => __('dashboard/feedbacks.ratings.2'),
                        3 => __('dashboard/feedbacks.ratings.3'),
                        4 => __('dashboard/feedbacks.ratings.4'),
                        5 => __('dashboard/feedbacks.ratings.5'),
                        default => __('dashboard/feedbacks.ratings.default'),
                    })
                    ->color(fn(int $state): string => match ($state) {
                        1 => 'danger',
                        2 => 'alert',
                        3 => 'gray',
                        4 => 'info',
                        5 => 'success',
                        default => 'none',
                    })->summarize(
                        Average::make('rating'),
                    )->label(__('dashboard/feedbacks.rating')),
                Tables\Columns\TextColumn::make('message')->label(__('dashboard/feedbacks.message')),

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
