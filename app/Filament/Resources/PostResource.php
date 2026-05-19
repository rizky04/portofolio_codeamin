<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Models\Post;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-document-text'; }
    public static function getNavigationLabel(): string { return 'Blog / Artikel'; }
    public static function getNavigationSort(): ?int { return 6; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Konten')->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Forms\Components\Textarea::make('excerpt')->label('Ringkasan')->rows(2),
                Forms\Components\RichEditor::make('body')->label('Isi Artikel')->required()->columnSpanFull(),
            ]),
            Section::make('Meta')->schema([
                Forms\Components\FileUpload::make('cover_image')->label('Gambar Cover')->image()->disk('public')->directory('posts'),
                Forms\Components\TextInput::make('category')->label('Kategori'),
                Forms\Components\TagsInput::make('tags')->label('Tag'),
                Forms\Components\Select::make('status')->options([
                    'published' => 'Published',
                    'draft' => 'Draft',
                ])->default('draft')->required()->live(),
                Forms\Components\DateTimePicker::make('published_at')
                    ->label('Tanggal Publish')
                    ->visible(fn ($get) => $get('status') === 'published'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('cover_image')->label('Cover'),
            Tables\Columns\TextColumn::make('title')->label('Judul')->searchable()->limit(40),
            Tables\Columns\TextColumn::make('category')->label('Kategori'),
            Tables\Columns\TextColumn::make('status')->badge()->color(fn (string $state) => match($state) {
                'published' => 'success',
                'draft' => 'gray',
                default => 'gray',
            }),
            Tables\Columns\TextColumn::make('published_at')->label('Publish')->dateTime('d M Y')->sortable(),
        ])->defaultSort('published_at', 'desc')
            ->filters([
                Tables\Filters\SelectFilter::make('status')->options([
                    'published' => 'Published',
                    'draft' => 'Draft',
                ]),
            ])
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
