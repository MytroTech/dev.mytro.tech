<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    use Translatable;

    protected static ?string $model = Contact::class;
    protected static ?string $navigationIcon = 'heroicon-o-phone';


    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('contact.name')),

                Forms\Components\RichEditor::make('address')
                    ->label(__('contact.address'))
                    ->required(),

                Forms\Components\TextInput::make('phone')
                    ->tel()
                    ->label(__('contact.telephone'))
                    ->helperText(__('contact.phone_helper'))
                    ->required(),

                Forms\Components\TextInput::make('fax')
                    ->label(__('contact.fax'))
                    ->helperText(__('contact.fax_helper')),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->label(__('contact.email'))
                    ->required(),

                Forms\Components\TextInput::make('position')
                    ->numeric()
                    ->default(0)
                    ->label(__('contact.position'))
                    ->required(),

                Forms\Components\Toggle::make('is_active')
                    ->label(__('contact.active'))
                    ->default(false),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('position')
            ->defaultSort('position', 'asc')
            ->columns([
                TextColumn::make('id')
                    ->label(__('contact.id')),

                TextColumn::make('address')
                    ->label(__('contact.address_name'))
                    ->formatStateUsing(function ($state, $record) {
                        return "<div><strong>{$record->address}</strong><br><small>{$record->title}</small></div>";
                    })
                    ->html()
                    ->searchable()
                    ->wrap(),

                TextColumn::make('phone')
                    ->label(__('contact.telephone_fax'))
                    ->description(fn ($record) => $record->fax)
                    ->wrap()
                    ->searchable(),

                TextColumn::make('email')
                    ->label(__('contact.email'))
                    ->searchable()
                    ->copyable()
                    ->limit(50),

               /* TextColumn::make('position')
                    ->label(__('contact.position'))
                    ->sortable(),*/

                ToggleColumn::make('is_active')
                    ->label(__('contact.active'))
                    ->sortable()
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.contacts');
    }

    public static function getBreadcrumb(): string
    {
        return __('menu.contacts');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.contacts');
    }

    public static function getLabel(): string
    {
        return __('menu.contact');
    }


    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit'   => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
