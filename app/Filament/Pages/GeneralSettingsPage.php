<?php

namespace App\Filament\Pages;

namespace App\Filament\Pages;

use App\Models\Language;
use App\Settings\GeneralSettings;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class GeneralSettingsPage extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';
    protected static string $settings = GeneralSettings::class;

    public function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
            Forms\Components\TextInput::make('site_name')
                ->label('Site Name')
                ->required()
                ->maxLength(255),

            Forms\Components\TextInput::make('support_email')
                ->label('Feedback Email')
                ->email()
                ->required()
                ->helperText('This email will receive feedback form messages.'),

            Forms\Components\TextInput::make('site_email')
                ->label('Site Email')
                ->email()
                ->required(),

            Forms\Components\TextInput::make('site_phone')
                ->label('Site Phone')
                ->email()
                ->required(),

            Forms\Components\Select::make('default_language')
                ->label('Default Language')
                ->options(Language::pluck('name', 'id')->toArray())
                ->required()
                ->native(false),

            Forms\Components\FileUpload::make('presentation_file')
                ->label('Presentation File')
                ->disk('public')
                ->directory('presentations')
                ->preserveFilenames()
                ->downloadable()
                ->openable()
                ->previewable(false)
                ->helperText('Upload a presentation file (PDF, DOC, etc.)'),
        ]);
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.general');
    }

    public static function getNavigationGroup(): string
    {
        return __('menu.settings');
    }

}
