<?php

namespace App\Filament\Resources\CmsPageNavigationCategoryResource\Pages;

use App\Filament\Resources\CmsPageNavigationCategoryResource;
use Filament\Actions;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\EditRecord;

class EditCmsPageNavigationCategory extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageNavigationCategoryResource\Pages\EditCmsPageNavigation
{
    protected static string $resource = CmsPageNavigationCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
