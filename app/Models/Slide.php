<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Slide extends Model
{
    use HasFactory;
    use HasTranslations;

    public array $translatable = ['title', 'content'];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
        ];
    }
}
