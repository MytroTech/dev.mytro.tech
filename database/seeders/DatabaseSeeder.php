<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Language;
use App\Models\MetaTag;
use App\Models\News;
use App\Models\Page;
use App\Models\SocialMedia;
use App\Models\Vacancy;
use Database\Factories\SocialMediaFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Artisan::call('filament-access-management:install');

        Language::factory()->state(['name' => 'English', 'code' => 'en'])->create();
        Language::factory()->state(['name' => 'Russian', 'code' => 'ru'])->create();
        Language::factory()->state(['name' => 'Ukrainian', 'code' => 'uk'])->create();

        $this->call(MenuTranslationSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SlideSeeder::class);
        $this->call(PageSeeder::class);
        $this->call(MetaTagSeeder::class);
        $this->call(NewsSeeder::class);
        $this->call(ContactsSeeder::class);
        $this->call(FeedbackSeeder::class);

        Vacancy::factory(10)->create();
        SocialMedia::factory(4)->create();
    }
}
