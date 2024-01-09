<?php

namespace App\CmsPages\Templates;

use Filament\Forms;
use Guava\FilamentIconPicker\Forms\IconPicker;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Renderer\AtomicDesignPageRenderer;

final class WhyOmanTemplate implements CmsPageTemplate
{
    protected static ?string $view = null;

    public static function title(): string
    {
        return 'WhyOmanTemplate';
    }

    public static function schema(): array
    {
        return [
            Forms\Components\Section::make()
                ->schema([
                    Forms\Components\TextInput::make('content')
                        ->label(__('filament-cms::filament-cms.fields.cms_page.block-template.content'))
                ]),

            Forms\Components\Section::make('2024 Vision')->schema([
                Forms\Components\TextInput::make('2024_vision_main_title'),
                Forms\Components\TextInput::make('2024_vision_main_description'),
                Forms\Components\TextInput::make('2024_vision_title'),
                Forms\Components\TextInput::make('first_axis'),
                Forms\Components\TextInput::make('second_axis'),
                Forms\Components\TextInput::make('thread_axis'),
                Forms\Components\TextInput::make('fourth_axis'),
                Forms\Components\TextInput::make('stats_1_number'),
                Forms\Components\TextInput::make('stats_1_title'),
                Forms\Components\TextInput::make('stats_2_number'),
                Forms\Components\TextInput::make('stats_2_title'),
            ]),

            Forms\Components\Section::make('Competitive advantages')->schema([
                Forms\Components\TextInput::make('competitive_advantages_main_title'),
                Forms\Components\TextInput::make('competitive_advantages_main_description'),
                Forms\Components\Repeater::make('competitive_advantages')->schema([
                    Forms\Components\TextInput::make('title'),
                    Forms\Components\TextInput::make('description'),
                    IconPicker::make('icon')->sets(['heroicons', 'fontawesome-solid']),
                ]),
            ]),
            Forms\Components\Section::make('International success')->schema([
                Forms\Components\TextInput::make('international_success_main_title'),
                Forms\Components\TextInput::make('international_success_main_description'),
                Forms\Components\FileUpload::make('international_success_main_image'),
            ]),

            Forms\Components\Section::make('Business-friendly environment')->schema([
                Forms\Components\TextInput::make('business_friendly_environment_main_title'),
                Forms\Components\TextInput::make('business_friendly_environment_main_description'),
                Forms\Components\Repeater::make('business_friendly_environment_features')->schema([
                    Forms\Components\TextInput::make('description'),
                ]),
            ]),

            Forms\Components\Section::make('Infrastructure')->schema([
                Forms\Components\TextInput::make('infrastructure_main_title'),
                Forms\Components\RichEditor::make('infrastructure_description'),
                Forms\Components\FileUpload::make('infrastructure_image'),
            ]),

            Forms\Components\Section::make('Cost')->schema([
                Forms\Components\TextInput::make('cost_col_1_title'),
                Forms\Components\TextInput::make('cost_col_1_description'),
                Forms\Components\TextInput::make('cost_col_2_title'),
                Forms\Components\TextInput::make('cost_col_2_description'),
            ]),


            Forms\Components\Section::make('Fun Facts')->schema([
                Forms\Components\TextInput::make('fun_facts_main_title'),
                Forms\Components\Repeater::make('fun_facts')->schema([
                    Forms\Components\TextInput::make('description'),
                ]),
            ]),

            Forms\Components\Section::make('Success Framework')->schema([
                Forms\Components\TextInput::make('success_framework_main_title'),
                Forms\Components\TextInput::make('success_framework_main_description'),
                Forms\Components\TextInput::make('talents_main_title'),
                Forms\Components\TextInput::make('talents_main_description'),
            ]),

            Forms\Components\Section::make('Natural resources and lifestyle')->schema([
                Forms\Components\TextInput::make('natural_col_1_title'),
                Forms\Components\TextInput::make('natural_col_1_description'),
                Forms\Components\FileUpload::make('natural_col_1_image'),
                Forms\Components\TextInput::make('natural_col_2_title'),
                Forms\Components\TextInput::make('natural_col_2_description'),
                Forms\Components\FileUpload::make('natural_col_2_image'),
            ]),

            Forms\Components\Section::make('Investor residency program')
                ->schema([
                    Forms\Components\TextInput::make('investor_residency_program_title'),
                    Forms\Components\TextInput::make('investor_residency_program_description'),
                    Forms\Components\TextInput::make('investor_residency_program_goal_title'),
                    Forms\Components\TextInput::make('investor_residency_program_goal_description'),
                    Forms\Components\Repeater::make('investor_residency_program_features')->schema([
                        Forms\Components\TextInput::make('title'),
                    ]),
                    Forms\Components\TextInput::make('investor_residency_program_category_title'),
                    Forms\Components\TextInput::make('investor_residency_program_category_1_title'),
                    Forms\Components\RichEditor::make('investor_residency_program_category_1_description'),
                    Forms\Components\TextInput::make('investor_residency_program_category_2_title'),
                    Forms\Components\RichEditor::make('investor_residency_program_category_2_description'),
                    Forms\Components\TextInput::make('investor_residency_program_roles_title'),
                    Forms\Components\Repeater::make('investor_residency_program_roles')->schema([
                        Forms\Components\TextInput::make('description'),
                    ]),
                    Forms\Components\TextInput::make('investor_residency_program_link'),
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
