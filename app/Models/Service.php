<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Service extends Model
{
    use HasFactory;
    use HasTranslations;
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->usingLanguage(app()->getLocale())
            ->saveSlugsTo('slug');
    }

    protected $casts = [
        'gallery' => 'array',
    ];


    public array $translatable = [
        'title',
        'excerpt',
        'content',
    ];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
