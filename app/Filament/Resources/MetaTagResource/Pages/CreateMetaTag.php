<?php

namespace App\Filament\Resources\MetaTagResource\Pages;

use App\Filament\Resources\MetaTagResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMetaTag extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = MetaTagResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }
    public function getTitle(): string | \Illuminate\Contracts\Support\Htmlable
    {
        return __('meta_tag.create_title');
    }
}
