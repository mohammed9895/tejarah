<?php

use SolutionForest\FilamentCms\Enums;

return [
    /*
        |--------------------------------------------------------------------------
        | Enums
        |--------------------------------------------------------------------------
    */
    Enums\PageStatus::class => [
        Enums\PageStatus::DRAFT => 'Draft',
        Enums\PageStatus::PUBLISHED => 'Published',
        Enums\PageStatus::SCHEDULE => 'Schedule',
    ],

    Enums\NavigationType::class => [
        Enums\NavigationType::PAGE => 'Page',
        Enums\NavigationType::EXTERNAL => 'External',
    ],

    Enums\UrlTarget::class => [
        Enums\UrlTarget::Blank => 'Blank',
        Enums\UrlTarget::Self => 'Self',
        Enums\UrlTarget::Parent => 'Parent',
        Enums\UrlTarget::Top => 'Top',
    ],
];
