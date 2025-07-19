<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetaTagResource\Pages;
use App\Models\MetaTag;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MetaTagResource extends Resource
{
    use Translatable;

    protected static ?string $model = MetaTag::class;
    protected static ?string $navigationGroup = 'Settings';
    protected static ?string $navigationIcon = 'heroicon-o-tag';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('path')
                    ->label(__('meta_tag.path'))
                    ->required(),

                Forms\Components\TextInput::make('title')
                    ->label(__('meta_tag.title'))
                    ->required()
                    ->translateLabel(),

                Forms\Components\Textarea::make('description')
                    ->label(__('meta_tag.description'))
                    ->translateLabel(),

                Forms\Components\Textarea::make('keywords')
                    ->label(__('meta_tag.keywords'))
                    ->translateLabel(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label(__('meta_tag.id'))
                    ->sortable(),

                TextColumn::make('path')
                    ->label(__('meta_tag.path'))
                    ->wrap()
                    ->searchable()
                    ->sortable(),

                TextColumn::make('title')
                    ->label(__('meta_tag.title_html'))
                    ->wrap()
                    ->html(),

                TextColumn::make('description')
                    ->label(__('meta_tag.description_html'))
                    ->wrap()
                    ->html(),
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
        return __('menu.meta_tags');
    }

    public static function getNavigationGroup(): string
    {
        return __('menu.settings');
    }

    public static function getLabel(): string
    {
        return __('menu.meta_tag_single');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.meta_tags');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListMetaTags::route('/'),
            'create' => Pages\CreateMetaTag::route('/create'),
            'edit'   => Pages\EditMetaTag::route('/{record}/edit'),
        ];
    }
}
