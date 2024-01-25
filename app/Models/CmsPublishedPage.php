<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentCms\Models\CmsPublishedPage as BaseModel;
use Spatie\Translatable\HasTranslations;

class CmsPublishedPage extends BaseModel
{
    use HasFactory;
    use HasTranslations;

    public $translatable = [
        'title',
        'data',
    ];

}
