<?php

namespace App\Filament\Resources\ContentType;

use App\Filament\Resources\ContentType\BlogResource\Pages;
use App\CmsPages\Templates\ContentType\Blog as Template;
use Filament\Forms;
use Illuminate\Contracts\Support\Htmlable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use SolutionForest\FilamentCms\Enums\PageType;
use SolutionForest\FilamentCms\Filament\Resources\ContentTypePageBaseResource as BaseResource;

class BlogResource extends BaseResource
{
     use \Filament\Resources\Concerns\Translatable;

    protected static ?int $navigationSort = null;

    protected static $parentPageKey = '8';

    protected static string $subSlug = 'blogs';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';




    public static function getPluralLabel(): ?string
    {
        return __('dashboard/blogs.blogs');
    }

    public static function getModelLabel(): string
    {
        return __('dashboard/blogs.blog');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogs::route('/'),
            'edit' => Pages\EditBlog::route('/{record:id}/edit'),
            'create' => Pages\CreateBlog::route('/create'),
        ];
    }

    public static function getTemplate(): string
    {
        return Template::class;
    }
}
