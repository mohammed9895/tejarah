<?php

namespace App\Filament\Resources\SuggestionResource\Pages;

use App\Filament\Resources\SuggestionResource;
use Filament\Actions;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewSuggestion extends ViewRecord
{
    protected static string $resource = SuggestionResource::class;

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make(__('dashboard/suggestions.personal_information'))
                    ->schema([
                        TextEntry::make('name')->label(__('dashboard/suggestions.name')),
                        TextEntry::make('email')->label(__('dashboard/suggestions.email')),
                        TextEntry::make('phone')->label(__('dashboard/suggestions.phone')),
                        TextEntry::make('civil_id')->label(__('dashboard/suggestions.civil_id')),
                    ])->columns(3),
                Section::make(__('dashboard/suggestions.suggestion_information'))
                    ->schema([
                    IconEntry::make('connected_to_service')->label(__('suggestion.connected_to_service'))->boolean(),
                    TextEntry::make('service_type')->label(__('suggestion.service_type')),
                    TextEntry::make('province.name')->label(__('dashboard/suggestions.province')),
                    TextEntry::make('state.name')->label(__('dashboard/suggestions.state')),
                ])->columns(2),
                Section::make(__('dashboard/suggestions.details'))
                    ->schema([
                    TextEntry::make('details')->hiddenLabel(),
                ]),
            ]);
    }
}
