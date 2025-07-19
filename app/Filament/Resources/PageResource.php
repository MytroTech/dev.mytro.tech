<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PageResource extends Resource
{
    use Translatable;

    protected static ?string $model = Page::class;
    protected static ?string $navigationIcon = 'heroicon-o-document';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('page.title'))
                    ->required(),

                Forms\Components\TextInput::make('slug')
                    ->label(__('page.slug'))
                    ->required(),

                Forms\Components\TextInput::make('position')
                    ->label(__('page.position'))
                    ->numeric(),

                Forms\Components\Textarea::make('excerpt')
                    ->label(__('page.excerpt'))
                    ->nullable(),

                Forms\Components\RichEditor::make('content')
                    ->label(__('page.content'))
                    ->required(),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label(__('page.published_at'))
                    ->required(),

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
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('position')
            ->defaultSort('position', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('page.id'))
                    ->sortable(),

                Tables\Columns\TextColumn::make('title')
                    ->label(__('page.title_slug'))
                    ->wrap()
                    ->formatStateUsing(function ($state, $record) {
                        return "<div><strong>{$record->title}</strong><br><small>{$record->slug}</small></div>";
                    })
                    ->html()
                    ->searchable(['title', 'slug']),

                Tables\Columns\TextColumn::make('published_at')
                    ->label(__('page.published_at'))
                    ->dateTime('d/m/Y - H:i')
                    ->sortable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getNavigationLabel(): string
    {
        return __('menu.pages');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.pages');
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit'   => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
