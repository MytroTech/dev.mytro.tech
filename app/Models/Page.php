<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use LaravelIdea\Helper\App\Models\_IH_Page_C;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Spatie\Translatable\HasTranslations;

class Page extends Model
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

    protected $casts = [
        'created_by' => 'integer',
        'updated_by' => 'integer',
        'published_at' => 'timestamp',
        'gallery' => 'array'
    ];


    public array $translatable = ['title', 'excerpt', 'content'];

    public function pagePhotos(): HasMany
    {
        return $this->hasMany(PagePhoto::class);
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

    public static function getServicePages(): Collection
    {
       return Service::where('is_active', true)
           ->orderBy('sort_order')
           ->get();
    }

    public static function getSlides(): Collection
    {
        return Slide::where('is_active', true)
            ->orderBy('sort_order')
            ->get();
    }
}
