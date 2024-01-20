<?php

namespace App\Filament\Resources\CmsPageNavigationCategoryResource\Pages;

use App\Filament\Resources\CmsPageNavigationCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCmsPageNavigationCategory extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageNavigationCategoryResource\Pages\CreateCmsPageNavigationCategory
{
    use \Filament\Resources\Pages\CreateRecord\Concerns\Translatable;

    protected static string $resource = CmsPageNavigationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
        ];
    }
}