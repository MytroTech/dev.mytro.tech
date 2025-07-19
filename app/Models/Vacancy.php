<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Vacancy extends Model
{
    use HasFactory, SoftDeletes;
    use HasTranslations;
    use HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->usingLanguage(app()->getLocale())
            ->saveSlugsTo('slug');
    }

    public array $translatable = ['title', 'excerpt', 'content'];

    protected $casts = [
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'published_at' => 'timestamp',
    ];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getUrl(): string
    {
        return lang_route('career', ['slug' => $this->slug]);
    }


    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function next()
    {
        return $this->_next;
    }

    /**
     * Returns prev vacancy model
     *
     * @return News
     */
    public function prev(): News
    {
        return $this->_prev;
    }

    /**
     * Loads prev and next articles
     *
     * @return void
     */
    public function loadPrevAndNext(): void
    {
        $this->_prev = self::where('published_at', '<', $this->published_at)->orderBy('published_at', 'desc')->first();
        $this->_next = self::where('published_at', '>', $this->published_at)->orderBy('published_at')->first();
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }



}
