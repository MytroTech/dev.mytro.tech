<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Mime\MimeTypes;

class Attachment extends Model
{
    use HasFactory;

    public function attachable(): MorphTo
    {
        return $this->morphTo();
    }

    protected static function booted(): void
    {
        static::creating(static function ($attachment) {
            if ($attachment->file && Storage::disk('public')->exists($attachment->file)) {
                $attachment->mime_type = Storage::disk('public')->mimeType($attachment->file);
                $attachment->size = Storage::disk('public')->size($attachment->file);
            }
        });

        //for updating the file
        static::updating(static function ($attachment) {
            if ($attachment->file && Storage::disk('public')->exists($attachment->file)) {
                $attachment->mime_type = Storage::disk('public')->mimeType($attachment->file);
                $attachment->size = Storage::disk('public')->size($attachment->file);
            }
        });
    }

   public function getExtension(): string
    {
        return MimeTypes::getDefault()->getExtensions($this->mime_type)[0] ?? '';
    }

    public function getUrl(): string
    {
        return Storage::disk('public')->url($this->file);
    }

}
