<?php

namespace App\CmsPages\Templates;

use Filament\Forms;
use Filament\Forms\Components\Tabs;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Renderer\AtomicDesignPageRenderer;

final class AboutUsTemplate implements CmsPageTemplate
{
    protected static ?string $view = null;

    public $number = 01;

    public static function title(): string
    {
        return 'AboutUsTemplate';
    }

    public static function schema(): array
    {
        return [

            Forms\Components\TextInput::make('content')
                ->label(__('filament-cms::filament-cms.fields.cms_page.block-template.content')),
            Forms\Components\Section::make('Minister Message')
                ->description('Minister message and title and name')
                ->schema([
                    Forms\Components\TextInput::make('minister_message_title'),
                    Forms\Components\RichEditor::make('minister_message_content'),
                    Forms\Components\TextInput::make('minister_name'),
                    Forms\Components\TextInput::make('minister_position'),
                    Forms\Components\FileUpload::make('minister_image'),
                ]),
            Forms\Components\Section::make('Vision and Mission')
                ->description('Ministry Vision and Mission')
                ->schema([
                    Forms\Components\TextInput::make('vision_title'),
                    Forms\Components\TextInput::make('vision_content'),
                    Forms\Components\TextInput::make('mission_title'),
                    Forms\Components\TextInput::make('mission_content'),
                    Forms\Components\Repeater::make('values')
                        ->label('Our Values')
                        ->schema([
                            Forms\Components\TextInput::make('value_title'),
                        ])
                ]),
            Forms\Components\Section::make('Directorates')
                ->description('Directorates and offices')
                ->schema([
                    Forms\Components\Repeater::make('directorates')
                        ->label('Directorates')
                        ->schema([
                            Forms\Components\TextInput::make('number'),
                            Forms\Components\TextInput::make('title'),
                            Forms\Components\RichEditor::make('content'),
                        ])
                ]),
            Forms\Components\Section::make('Organizational Structure')
                ->description('Image show the Organizational Structure')
                ->schema([
                    Forms\Components\TextInput::make('organizational_structure_title'),
                    Forms\Components\FileUpload::make('organizational_structure_image'),
                ]),
            Forms\Components\Section::make('Ministry\'s specialties')
                ->description('Image show the Organizational Structure')
                ->schema([
                    Forms\Components\TextInput::make('ministry_specialties_title'),
                    Forms\Components\Repeater::make('specialties')->schema([
                        Forms\Components\TextInput::make('title'),
                        Forms\Components\RichEditor::make('content'),
                    ])->cloneable(),
                ]),

            Forms\Components\Section::make('Subsidiary directorates and departments')
                ->description('add the name of the departments and other information.')
                ->schema([
                    Forms\Components\TextInput::make('directorates_and_departments_title'),
                    Forms\Components\TextInput::make('directorates_and_departments_description'),
                    Forms\Components\Repeater::make('directorates_and_departments')->schema([
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\TextInput::make('location'),
                        Forms\Components\TextInput::make('contact_name'),
                        Forms\Components\TextInput::make('contact_email'),
                    ])->cloneable(),
                ]),
            Forms\Components\Section::make('Nazdaher Program')
                ->description('information about Nazdaher program')
                ->schema([
                    Forms\Components\TextInput::make('nazdaher_title'),
                    Forms\Components\FileUpload::make('nazdaher_image'),
                    Forms\Components\RichEditor::make('nazdaher_content')
                ]),

            Forms\Components\Section::make('Team')
                ->description('Team images and information')
                ->schema([
                    Forms\Components\TextInput::make('team_section_title'),
                    Forms\Components\Repeater::make('team')->schema([
                        Forms\Components\TextInput::make('name'),
                        Forms\Components\TextInput::make('position'),
                        Forms\Components\FileUpload::make('image'),
                    ])->cloneable(),
                ]),
        ];
    }

    public static function getRenderer(): ?string
    {
        return static::$view ?? AtomicDesignPageRenderer::class;
    }

    public static function hiddenOnTemplateOptions(): bool
    {
        return false;
    }
}
