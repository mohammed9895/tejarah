<?php

namespace App\CmsPages\Templates;

use Filament\Forms;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Renderer\AtomicDesignPageRenderer;

final class InvetInOmanTemplate implements CmsPageTemplate
{
    protected static ?string $view = null;

    public static function title(): string
    {
        return 'InvetInOmanTemplate';
    }

    public static function schema(): array
    {
        return [
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('content')
                        ->label(__('filament-cms::filament-cms.fields.cms_page.block-template.content'))
                ]),
            Forms\Components\Section::make('How it Work')
                ->description('5 steps how it work')
                ->schema([
                    Forms\Components\TextInput::make('steps_main_title'),
                    Forms\Components\TextInput::make('steps_main_description'),
                    Forms\Components\TextInput::make('step_1_title'),
                    Forms\Components\TextInput::make('step_2_title'),
                    Forms\Components\TextInput::make('step_3_title'),
                    Forms\Components\TextInput::make('step_4_title'),
                    Forms\Components\TextInput::make('step_5_title'),
                ]),

            Forms\Components\Section::make('Commercial activities')
                ->description('add as many commercial activities')
                ->schema([
                    Forms\Components\TextInput::make('commercial_activities_main_title'),
                    Forms\Components\TextInput::make('commercial_activities_main_description'),
                    Forms\Components\Repeater::make('activities')
                        ->schema([
                            Forms\Components\TextInput::make('title'),
                            Forms\Components\TextInput::make('description'),
                        ])
                        ->cloneable()
                    ->collapsed()
                ]),
            Forms\Components\Section::make('Establishing a Business Section')
                ->schema([
                    Forms\Components\TextInput::make('establishing_a_business_title'),
                    Forms\Components\RichEditor::make('establishing_a_business_description'),
                    Forms\Components\FileUpload::make('establishing_a_business_image'),
                    Forms\Components\TextInput::make('establishing_a_business_phone'),
                    Forms\Components\TextInput::make('establishing_a_business_email'),
                    Forms\Components\TextInput::make('establishing_a_business_x'),
                    Forms\Components\TextInput::make('establishing_a_business_website'),
                    Forms\Components\Repeater::make('establishing_a_business_features')->schema([
                        Forms\Components\TextInput::make('title'),
                    ]),
                    Forms\Components\Repeater::make('establishing_a_business_stats')->schema([
                        Forms\Components\TextInput::make('number'),
                        Forms\Components\TextInput::make('title'),
                    ]),
                ]),
            Forms\Components\Section::make('Export Support Section')
                ->schema([
                    Forms\Components\TextInput::make('export_support_title'),
                    Forms\Components\TextInput::make('export_support_description'),
                ]),

            Forms\Components\Section::make('We here for help section')
                ->schema([
                    Forms\Components\TextInput::make('here_for_help_main_title'),
                    Forms\Components\RichEditor::make('here_for_help_main_description'),
                    Forms\Components\FileUpload::make('here_for_help_main_image'),
                    Forms\Components\Repeater::make('here_for_help_features')->schema([
                        Forms\Components\TextInput::make('title'),
                    ]),
                ]),

            Forms\Components\Section::make('Invest in Oman section')
                ->schema([
                    Forms\Components\TextInput::make('invest_in_oman_main_title'),
                    Forms\Components\RichEditor::make('invest_in_oman_main_description'),
                    Forms\Components\FileUpload::make('invest_in_oman_main_image'),
                    Forms\Components\TextInput::make('invest_in_oman_phone'),
                    Forms\Components\TextInput::make('invest_in_oman_email'),
                    Forms\Components\TextInput::make('invest_in_oman_x'),
                    Forms\Components\TextInput::make('invest_in_oman_website'),
                ]),

            Forms\Components\Section::make('E Services')
                ->schema([
                    Forms\Components\TextInput::make('e_services_main_title'),
                    Forms\Components\Repeater::make('e_services')->schema([
                        Forms\Components\TextInput::make('description'),
                        Forms\Components\FileUpload::make('logo'),
                        Forms\Components\TextInput::make('x'),
                        Forms\Components\TextInput::make('phone'),
                        Forms\Components\TextInput::make('email'),
                        Forms\Components\TextInput::make('website'),
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
