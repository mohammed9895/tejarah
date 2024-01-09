<?php

namespace App\Filament\Resources\LegislationResource\Pages;

use App\Filament\Resources\LegislationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLegislation extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = LegislationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }

}
