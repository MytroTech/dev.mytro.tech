<?php
namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name = '';
    public string $support_email = '';
    public string $site_email = '';
    public string $site_phone = '';
    public string $default_language = '';
    public ?string $presentation_file = null;

    public static function group(): string
    {
        return 'general';
    }
}

