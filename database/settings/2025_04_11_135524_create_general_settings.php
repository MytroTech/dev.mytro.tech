<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
       $this->migrator->add('general.site_name', 'Oli');
        $this->migrator->add('general.support_email', 'test@gmail.com');
        $this->migrator->add('general.site_email', 'info@olirresources.com.ua');
        $this->migrator->add('general.site_phone', '+38 (048) 705-55-62');
        $this->migrator->add('general.default_language', 2);
        $this->migrator->add('general.presentation_file', null);
    }
};
