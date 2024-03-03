<?php

namespace App\Filament\Resources\ComplaintResource\Pages;

use App\Filament\Resources\ComplaintResource;
use Filament\Actions;
use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Pages\ViewRecord;

class ViewComplaint extends ViewRecord
{
    protected static string $resource = ComplaintResource::class;

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
                        TextEntry::make('cr_number')->label(__('complaint.cr')),
                    ])->columns(3),
                Section::make(__('complaint.complaint_info'))
                    ->schema([
                        TextEntry::make('submission_type')
                            ->formatStateUsing(function ($state) {
                                return $state == 1 ? __('complaint.online') : __('complaint.offline');
                            })
                            ->label(__('complaint.summation_type'))->badge(),
                        TextEntry::make('service_type')->label(__('suggestion.service_type'))->badge(),
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
