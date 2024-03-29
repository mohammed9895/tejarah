<?php

namespace App\Filament\Resources\CmsPageResource\Pages;

use App\Filament\Resources\CmsPageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCmsPage extends \SolutionForest\FilamentCms\Filament\Resources\CmsPageResource\Pages\CreateCmsPage
{
    use \Filament\Resources\Pages\CreateRecord\Concerns\Translatable;
    protected static string $resource = CmsPageResource::class;
}
