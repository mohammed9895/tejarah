<?php

namespace App\Filament\Resources\LegislationResource\Pages;

use App\Filament\Resources\LegislationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegislations extends ListRecords
{

    use ListRecords\Concerns\Translatable;

    protected static string $resource = LegislationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
