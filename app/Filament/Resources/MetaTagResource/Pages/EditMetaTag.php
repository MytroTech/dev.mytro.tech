<?php

namespace App\Filament\Resources\MetaTagResource\Pages;

use App\Filament\Resources\MetaTagResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetaTag extends EditRecord
{
    protected static string $resource = MetaTagResource::class;

    use EditRecord\Concerns\Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
    public function getTitle(): string | \Illuminate\Contracts\Support\Htmlable
    {
        return __('meta_tag.edit_title');
    }

}
