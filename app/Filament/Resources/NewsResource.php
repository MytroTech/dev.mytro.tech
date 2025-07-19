<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages\CreateNews;
use App\Filament\Resources\NewsResource\Pages\EditNews;
use App\Filament\Resources\NewsResource\Pages\ListNews;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\DeleteAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Resources\Concerns\Translatable;

class NewsResource extends Resource
{
    use Translatable;

    protected static ?string $model = News::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(1)
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label(__('news.title'))
                    ->required(),

                Forms\Components\TextInput::make('slug')
                    ->label(__('news.slug'))
                    ->required(),

                Forms\Components\Textarea::make('excerpt')
                    ->label(__('news.excerpt')),

                Forms\Components\RichEditor::make('content')
                    ->label(__('news.content'))
                    ->required(),

                Forms\Components\DateTimePicker::make('published_at')
                    ->label(__('news.published_at'))
//                    ->format('d/m/Y - H:i')
                    ->required(),

                Forms\Components\FileUpload::make('thumbnail')
                    ->image()
                    ->imageEditor()
                    ->label(__('news.thumbnail')),

                Repeater::make('attachments')
                    ->relationship() // Автоматически использует morphMany
                    ->label('Attachments')
                    ->schema([
                        FileUpload::make('file')
                            ->label('File')
                            ->disk('public')
                            ->directory('attachments/news')
                            ->preserveFilenames()
                            ->downloadable()
                            ->openable()
                            ->required(),

                        TextInput::make('name')
                            ->label('Display Name')
                            ->maxLength(255)
                            ->nullable(),
                    ])
                    ->defaultItems(0)
                    ->addActionLabel('Add attachment')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label(__('news.id'))
                    ->sortable(),

                ImageColumn::make('thumbnail')
                    ->label(__('news.thumbnail'))
                    ->toggleable()
                    ->size(40),

                TextColumn::make('title')
                    ->wrap()
                    ->label(__('news.title_slug'))
                    ->formatStateUsing(function ($state, $record) {
                        return "<div><strong>{$record->title}</strong><br><small>{$record->slug}</small></div>";
                    })
                    ->searchable()
                    ->html()
                    ->sortable(),

                TextColumn::make('published_at')
                    ->label(__('news.published_at'))
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

    public static function getNavigationLabel(): string
    {
        return __('menu.news');
    }

    public static function getPluralLabel(): string
    {
        return __('menu.news');
    }

    public static function getPages(): array
    {
        return [
            'index' => ListNews::route('/'),
            'create' => CreateNews::route('/create'),
            'edit' => EditNews::route('/{record}/edit'),
        ];
    }
}
