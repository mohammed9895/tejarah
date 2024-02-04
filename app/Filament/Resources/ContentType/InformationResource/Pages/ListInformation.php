<?php

namespace App\Filament\Resources\ContentType\InformationResource\Pages;

use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use SolutionForest\FilamentCms\Concern;
use SolutionForest\FilamentCms\Support\Utils;
use App\Filament\Resources\ContentType\InformationResource;
 use Filament\Actions\LocaleSwitcher;

class ListInformation extends ListRecords
{
     use ListRecords\Concerns\Translatable;

    protected static string $resource = InformationResource::class;

    public function isTableSearchable(): bool
    {
        return false;
    }

    public function isTableFilterable(): bool
    {
        return false;
    }

    protected function isTablePaginationEnabled(): bool
    {
        return false;
    }

    protected function getActions(): array
    {
        return [
             LocaleSwitcher::make(),
            CreateAction::make(),
        ];
    }
}
