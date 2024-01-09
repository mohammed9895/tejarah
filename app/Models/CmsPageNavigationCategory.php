<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use SolutionForest\FilamentCms\Models\CmsPageNavigationCategory as BaseModel;
use Spatie\Translatable\HasTranslations;

class CmsPageNavigationCategory extends BaseModel
{
    use HasFactory, HasTranslations;

    public $translatable = [
        'name',
        'title',
    ];
}
