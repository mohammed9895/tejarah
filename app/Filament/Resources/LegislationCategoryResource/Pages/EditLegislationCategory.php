<?php

namespace App\Filament\Resources\LegislationCategoryResource\Pages;

use App\Filament\Resources\LegislationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLegislationCategory extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = LegislationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
