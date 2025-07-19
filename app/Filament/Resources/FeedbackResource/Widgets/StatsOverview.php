<?php

namespace App\Filament\Resources\FeedbackResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?string $pollingInterval = '30s';

    protected function getStats(): array
    {
        $feedbacks = \App\Models\Feedback::where('was_read', 0)
//            ->withTrashed()
            ->count();

        return [
            Card::make('New feedbacks', $feedbacks),
        ];
    }
}
