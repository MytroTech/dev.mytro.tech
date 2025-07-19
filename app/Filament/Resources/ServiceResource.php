<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Models\Service;
use Filament\Forms\Components\FileUpload;
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

class ServiceResource extends Resource
{
    protected static ?string $model = Service::class;
    protected static ?string $slug = 'services';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    use Translatable;

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                TextInput::make('title')
                    ->label(__('service.title'))
                    ->required()
                    ->reactive()
		    ->afterStateUpdated(function ($state, callable $set) {$set('slug', \Str::slug($state));}),

                TextInput::make('slug')
                    ->label(__('service.slug'))
		    ->disabled()
                    ->required()
                    ->unique(Service::class, 'slug', fn($record) => $record),

                TextInput::make('excerpt')
                    ->label(__('service.excerpt')),

                TextInput::make('view_template')
                    ->label(__('service.view_template'))
                    ->required(),

                TextInput::make('sort_order')
                    ->label(__('service.sort_order'))
                    ->required()
                    ->integer(),

                Toggle::make('is_active')
                    ->label(__('contact.active'))
                    ->default(false),

                FileUpload::make('gallery')
                    ->label('Gallery')
                    ->multiple()
                    ->reorderable() // drag and drop sorting
                    ->image()
                    ->disk('public') // или другой диск, который ты используешь
                    ->directory('uploads/services')
                    ->preserveFilenames()
                    ->downloadable()
                    ->previewable(true)
                    ->columnSpanFull(),

              /*  Placeholder::make('created_at')
                    ->label(__('service.created_at'))
                    ->content(fn(?Service $record): string => $record?->created_at?->diffForHumans() ?? '-'),

                Placeholder::make('updated_at')
                    ->label(__('service.updated_at'))
                    ->content(fn(?Service $record): string => $record?->updated_at?->diffForHumans() ?? '-'),*/
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('sort_order', 'asc')
            ->columns([
                TextColumn::make('title')
                    ->label(__('service.service_name'))
                    ->formatStateUsing(function ($state, $record) {
                        return "<div><strong>{$record->title}</strong><br><small>{$record->slug}</small></div>";
                    })
                    ->html()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('excerpt')
                    ->label(__('service.excerpt'))
                    ->wrap(),

                ToggleColumn::make('is_active')
                    ->label(__('contact.active'))
                    ->sortable(),
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
            'index'  => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit'   => Pages\EditService::route('/{record}/edit'),
        ];
    }

    public static function getGloballySearchableAttributes(): array
    {
        return ['title', 'slug'];
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.services');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.services');
    }

    public static function getLabel(): string
    {
        return __('menu.service_single');
    }
}
