<?php

namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCmsPages extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource\Pages\ListCmsPages
{
    use \Filament\Resources\Pages\ListRecords\Concerns\Translatable;
    protected static string $resource = CmsPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
