<?php

namespace App\Filament\Resources\LegislationCategoryResource\Pages;

use App\Filament\Resources\LegislationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLegislationCategories extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = LegislationCategoryResource::class;
    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\CreateAction::make(),
        ];
    }
}
