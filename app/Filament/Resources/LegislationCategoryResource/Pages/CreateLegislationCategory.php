<?php

namespace App\Filament\Resources\LegislationCategoryResource\Pages;

use App\Filament\Resources\LegislationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLegislationCategory extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = LegislationCategoryResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
}
