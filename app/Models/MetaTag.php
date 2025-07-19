<?php

namespace App\Models;

use App\Traits\CreatedUpdatedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class MetaTag extends Model
{
    use HasFactory, SoftDeletes;
    use HasTranslations;
    use CreatedUpdatedBy;

    protected $casts = [
        'created_by' => 'integer',
        'updated_by' => 'integer',
    ];

    public array $translatable = ['title', 'description', 'keywords'];

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function updatedBy(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
