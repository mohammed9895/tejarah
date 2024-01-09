<?php

namespace App\Filament\Resources\LegislationResource\Pages;

use App\Filament\Resources\LegislationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLegislation extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = LegislationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
