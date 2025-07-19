<?php

namespace App\Filament\Resources\FeedbackResource\Pages;

use App\Filament\Resources\FeedbackResource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Form;
use Filament\Resources\Pages\ViewRecord;

class ViewFeedback extends ViewRecord
{
    protected static string $resource = FeedbackResource::class;

    public function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Card::make([
                    Placeholder::make('name')
                        ->label('Имя')
                        ->content(fn($record) => $record->name),

                    Placeholder::make('phone')
                        ->label('Телефон')
                        ->content(fn($record) => $record->phone),

                    Placeholder::make('message')
                        ->label('Сообщение')
                        ->content(fn($record) => strip_tags($record->message)),

                    Placeholder::make('read')
                        ->label(__('feedback.was_read'))
                        ->content(fn($record) => $record->read ? __('yes') : __('no')),
                ]),
            ]);
    }
}
