<?php

namespace App\Providers;

use App\Enums\SocialNetworkType;
use App\Models\Language;
use App\Models\Page;
use App\Models\Service;
use App\Models\SocialMedia;
use App\Settings\GeneralSettings;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $settings = app(GeneralSettings::class);
        $defaultLanguage = Schema::hasTable('languages') ? Language::where('id', $settings->default_language)->first() : null;

        if ($defaultLanguage) {
            $locale = $defaultLanguage->code;
            App::setLocale($locale);
            Config::set('translation-loader.locale', $locale);
            Config::set('app.locale', $locale);
            Config::set('app.name', $settings->site_name);
        }

        $sharedData = [
            'activeLanguages' => Schema::hasTable('languages') ? Language::all() : [],
            'socialLinks'     => Schema::hasTable('social_media') ? SocialMedia::where(['is_active' => true])->get() : [],
            'pages'           => Schema::hasTable('pages') ? Page::where(['is_active' => true])->get() : [],
            'services'        => Schema::hasTable('services') ? Service::where(['is_active' => true])->get() : [],
        ];

        View::composer('*', static function ($view) use ($sharedData) {
            foreach ($sharedData as $key => $value) {
                $view->with($key, $value);
            }
        });

        foreach (SocialNetworkType::cases() as $network) {
            FilamentIcon::register([
                $network->value => $network->icon(),
            ]);
        }

        Model::unguard();
        $this->registerCommands();
    }

    public function registerCommands(): void
    {
        DB::prohibitDestructiveCommands(
            $this->app->isProduction()
        );
    }
}
