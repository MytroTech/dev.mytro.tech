<?php

namespace App\Filament\Resources\ServiceResource\Pages;

use App\Filament\Resources\ServiceResource;
use Filament\Resources\Pages\ListRecords;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords\Concerns\Translatable;

class ListServices extends ListRecords
{
    protected static string $resource = ServiceResource::class;

    use Translatable;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
