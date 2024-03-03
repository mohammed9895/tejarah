<?php

use SolutionForest\FilamentCms\Enums;

return [
    /*
        |--------------------------------------------------------------------------
        | القوائم المرتبة
        |--------------------------------------------------------------------------
    */
    Enums\PageStatus::class => [
        Enums\PageStatus::DRAFT => 'مسودة',
        Enums\PageStatus::PUBLISHED => 'منشور',
        Enums\PageStatus::SCHEDULE => 'مجدول',
    ],

    Enums\NavigationType::class => [
        Enums\NavigationType::PAGE => 'صفحة',
        Enums\NavigationType::EXTERNAL => 'خارجي',
    ],

    Enums\UrlTarget::class => [
        Enums\UrlTarget::Blank => 'فارغ',
        Enums\UrlTarget::Self => 'ذاتي',
        Enums\UrlTarget::Parent => 'الأب',
        Enums\UrlTarget::Top => 'الأعلى',
    ],
];
