<?php

namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCmsPage extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource\Pages\EditCmsPage
{
    protected static string $resource = CmsPageResource::class;
    use \Filament\Resources\Pages\EditRecord\Concerns\Translatable;
    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
