<?php

namespace App\Filament\Resources\CmsPageNavigationCategoryResource\Pages;

use App\Filament\Resources\CmsPageNavigationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCmsPageNavigationCategories extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageNavigationCategoryResource\Pages\ListCmsPageNavigationCategories
{
    use \Filament\Resources\Pages\ListRecords\Concerns\Translatable;

    protected static string $resource = CmsPageNavigationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            \Filament\Actions\CreateAction::make(),
        ];
    }
}
