<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class News extends Model
{
    use HasFactory, SoftDeletes;
    use CreatedUpdatedBy;
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
        'published_at' => 'datetime',
    ];

    protected array $dates = ['published_at'];

    public function attachments(): MorphMany
    {
        return $this->morphMany(Attachment::class, 'attachable');
    }

    public function getUrl(): string
    {
        return lang_route('news.show', ['slug' => $this->slug]);
    }

    public function loadPrevAndNext(): void
    {
        ray($this);
        $this->_prev = self::where('published_at', '<', $this->published_at)->orderBy('published_at', 'desc')->first();
        $this->_next = self::where('published_at', '>', $this->published_at)->orderBy('published_at')->first();
    }


    public function next()
    {
        return $this->_next;
    }

    /**
     * Returns prev article model
     *
     * @return News
     */
    public function prev(): News
    {
        return $this->_prev;
    }


    public function existsThumbnail(): bool
    {
        return $this->thumbnail && Storage::disk('public')->exists(config('constants.paths.news.thumbnails') . $this->thumbnail);
    }


    public function translations(): MorphMany
    {
        return $this->morphMany(Translation::class, 'translationable');
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
