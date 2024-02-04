<?php

namespace App\CmsPages\Templates;

use Filament\Forms;
use Filament\Forms\Components\Tabs;
use SolutionForest\FilamentCms\CmsPages\Contracts\CmsPageTemplate;
use SolutionForest\FilamentCms\CmsPages\Renderer\AtomicDesignPageRenderer;

final class HomeTemplate implements CmsPageTemplate
{
    protected static ?string $view = null;

    public static function title(): string
    {
        return 'HomeTemplate';
    }

    public static function schema(): array
    {
        return [
            Forms\Components\Section::make('Slider Section')
                ->description('You can change 3 sliders information')
                ->schema([
                    Tabs::make('Tabs')
                        ->tabs([
                            Tabs\Tab::make('Slider 1')
                                ->schema([
                                    Forms\Components\TextInput::make('slider_1_title'),
                                    Forms\Components\TextInput::make('slider_1_description'),
                                    Forms\Components\FileUpload::make('slider_1_image'),
                                    Forms\Components\TextInput::make('slider_1_primary_button_text'),
                                    Forms\Components\TextInput::make('slider_1_primary_button_link'),
                                    Forms\Components\TextInput::make('slider_1_secondary_button_text'),
                                    Forms\Components\TextInput::make('slider_1_secondary_button_link'),
                                ]),
                            Tabs\Tab::make('Slider 2')
                                ->schema([
                                    Forms\Components\TextInput::make('slider_2_title'),
                                    Forms\Components\TextInput::make('slider_2_description'),
                                    Forms\Components\FileUpload::make('slider_2_image'),
                                    Forms\Components\TextInput::make('slider_2_primary_button_text'),
                                    Forms\Components\TextInput::make('slider_2_primary_button_link'),
                                    Forms\Components\TextInput::make('slider_2_secondary_button_text'),
                                    Forms\Components\TextInput::make('slider_2_secondary_button_link'),
                                ]),
                            Tabs\Tab::make('Slider 3')
                                ->schema([
                                    Forms\Components\TextInput::make('slider_3_title'),
                                    Forms\Components\TextInput::make('slider_3_description'),
                                    Forms\Components\FileUpload::make('slider_3_image'),
                                    Forms\Components\TextInput::make('slider_3_primary_button_text'),
                                    Forms\Components\TextInput::make('slider_3_primary_button_link'),
                                    Forms\Components\TextInput::make('slider_3_secondary_button_text'),
                                    Forms\Components\TextInput::make('slider_3_secondary_button_link'),
                                ]),
                        ]),
                ]),
            Forms\Components\Section::make('Supporting Section')
                ->description('You can change supporting section information')
                ->schema([
                    Forms\Components\TextInput::make('supporting_main_title'),
                    Forms\Components\TextInput::make('supporting_main_description'),
                    Forms\Components\Repeater::make('sites')->schema([
                        Forms\Components\FileUpload::make('logo'),
                        Forms\Components\TextInput::make('title'),
                        Forms\Components\TextInput::make('link'),
                        Forms\Components\TextInput::make('description'),
                        Forms\Components\ColorPicker::make('starting_color'),
                        Forms\Components\ColorPicker::make('ending_color'),
                    ])
                        ->collapsed()
                        ->cloneable(),
                ]),
            Forms\Components\Section::make('Media Section')
                ->description('You can change media section information')
                ->schema([
                    Forms\Components\TextInput::make('media_title'),
                    Forms\Components\TextInput::make('media_description'),
                    Forms\Components\TextInput::make('number_of_posts')
                    ->integer(),
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
