<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\NewsResource;
use App\Filament\Resources\ServiceResource;
use Filament\Actions\LocaleSwitcher;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Contracts\Support\Htmlable;

class CreateService extends CreateRecord
{
    protected static string $resource = ServiceResource::class;

    use CreateRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            LocaleSwitcher::make(),
            // ...
        ];
    }

    public function getTitle(): string | Htmlable
    {
        return __('service.create_title');
    }
}
