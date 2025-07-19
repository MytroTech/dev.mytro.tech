<?php

namespace App\Filament\Resources;

use App\Enums\SocialNetworkType;
use App\Filament\Resources\SocialMediaResource\Pages;
use App\Models\SocialMedia;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\ForceDeleteAction;
use Filament\Tables\Actions\ForceDeleteBulkAction;
use Filament\Tables\Actions\RestoreAction;
use Filament\Tables\Actions\RestoreBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SocialMediaResource extends Resource
{
    protected static ?string $model = SocialMedia::class;
    protected static ?string $slug = 'social-medias';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                TextInput::make('title')
                    ->label(__('social.title'))
                    ->required(),

                TextInput::make('link')
                    ->label(__('social.link'))
                    ->required(),

                Select::make('type')
                    ->label(__('social.type'))
                    ->helperText(__('social.type_helper_text'))
                    ->enum(SocialNetworkType::class)
                    ->options(SocialNetworkType::class),

                Toggle::make('is_active')
                    ->label(__('social.active')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label(__('social.title'))
                    ->searchable()
                    ->sortable(),

                TextColumn::make('link')
                    ->wrap()
                    ->label(__('social.link')),

                TextColumn::make('type')
                    ->label(__('social.type')),

                ToggleColumn::make('is_active')
                    ->label(__('contact.active')),
            ])
            ->filters([
                TrashedFilter::make(),
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
                RestoreAction::make(),
                ForceDeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                    RestoreBulkAction::make(),
                    ForceDeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListSocialMedias::route('/'),
            'create' => Pages\CreateSocialMedia::route('/create'),
            'edit'   => Pages\EditSocialMedia::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title'];
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.social_media');
    }

    public static function getLabel(): string
    {
        return __('menu.social_media_single');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.social_media');
    }

    public static function getNavigationGroup(): string
    {
        return __('menu.settings');
    }
}
