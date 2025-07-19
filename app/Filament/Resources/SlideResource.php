<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SlideResource\Pages;
use App\Models\Slide;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class SlideResource extends Resource
{
    use Translatable;

    protected static ?string $model = Slide::class;
    protected static ?string $slug = 'slides';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                TextInput::make('sort_order')
                    ->label(__('slide.sort_order'))
                    ->required()
                    ->integer(),

                TextInput::make('title')
                    ->label(__('slide.title'))
                    ->required(),

                TextInput::make('content')
		    ->label(__('content'))
		    ->required(),

                TextInput::make('video_path')
                    ->label(__('slide.video_path'))
                    ->required(),

                TextInput::make('color')
                    ->label(__('slide.color')),

                Toggle::make('is_active')
                    ->label(__('contact.active')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort_order')
            ->columns([
                TextColumn::make('sort_order')
                    ->label(__('slide.sort_order')),

                TextColumn::make('title')
                    ->label(__('slide.title'))
                    ->searchable()
                    ->sortable(),

		TextColumn::make('content')
		    ->label(__('slide.content')),

                TextColumn::make('video_path')
                    ->label(__('slide.video_path')),

                TextColumn::make('color')
                    ->label(__('slide.color')),

                ToggleColumn::make('is_active')
                    ->label(__('contact.active')),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSlides::route('/'),
            'create' => Pages\CreateSlide::route('/create'),
            'edit'   => Pages\EditSlide::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.slides');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.slides');
    }

    public static function getLabel(): string
    {
        return __('menu.slide_single');
    }
}
