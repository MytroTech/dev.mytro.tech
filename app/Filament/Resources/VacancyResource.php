<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VacancyResource\Pages;
use App\Models\Vacancy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VacancyResource extends Resource
{
    use Translatable;

    protected static ?string $model = Vacancy::class;
    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('vacancy.title'))
                    ->required(),

                Forms\Components\TextInput::make('slug')
                    ->label(__('vacancy.slug'))
                    ->required()
                    ->helperText(__('general.slug_helper')),

                Forms\Components\TextInput::make('position')
                    ->label(__('vacancy.position'))
                    ->default(0),

                Forms\Components\Textarea::make('excerpt')
                    ->label(__('vacancy.excerpt')),

                Forms\Components\RichEditor::make('content')
                    ->label(__('vacancy.content'))
                    ->required(),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label(__('vacancy.published_at'))
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('position')
            ->defaultSort('position', 'asc')
            ->columns([
                TextColumn::make('id')
                    ->label(__('vacancy.id'))
                    ->sortable(),

                TextColumn::make('title')
                    ->label(__('vacancy.title_slug'))
                    ->formatStateUsing(function ($state, $record) {
                        return "<div><strong>{$record->title}</strong><br><small>{$record->slug}</small></div>";
                    })
                    ->searchable()
                    ->html()
                    ->sortable(),

             /*   TextColumn::make('position')
                    ->label(__('vacancy.position'))
                    ->sortable(),*/

                TextColumn::make('published_at')
                    ->label(__('vacancy.published_at'))
                    ->dateTime('d/m/Y - H:i')
                    ->sortable(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.vacancies');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.vacancies');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListVacancies::route('/'),
            'create' => Pages\CreateVacancy::route('/create'),
            'edit' => Pages\EditVacancy::route('/{record}/edit'),
        ];
    }
}
