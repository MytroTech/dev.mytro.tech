<?php

namespace App\Filament\Resources\LanguageResource\Pages;

use App\Filament\Resources\LanguageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateLanguage extends CreateRecord
{
    protected static string $resource = LanguageResource::class;

    public function getTitle(): string | Htmlable
    {
        return __('language.create_title');
    }
}
