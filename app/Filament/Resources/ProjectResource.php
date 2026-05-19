<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Models\Project;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-folder-open'; }
    public static function getNavigationLabel(): string { return 'Proyek'; }
    public static function getNavigationGroup(): string|\UnitEnum|null { return 'Proyek'; }
    public static function getNavigationSort(): ?int { return 2; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Info Proyek')->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required()
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn ($state, $set) => $set('slug', Str::slug($state))),
                Forms\Components\TextInput::make('slug')->required()->unique(ignoreRecord: true),
                Forms\Components\Textarea::make('description')->label('Deskripsi')->rows(4)->required(),
                Forms\Components\TextInput::make('category')->label('Kategori'),
            ]),
            Section::make('Media & Link')->schema([
                Forms\Components\FileUpload::make('thumbnail')->label('Thumbnail')->image()->disk('public')->directory('projects'),
                Forms\Components\TextInput::make('demo_url')->label('Link Demo')->url(),
                Forms\Components\TextInput::make('github_url')->label('Link GitHub')->url(),
            ]),
            Section::make('Pengaturan')->schema([
                Forms\Components\CheckboxList::make('technologies')
                    ->label('Teknologi')
                    ->relationship('technologies', 'name')
                    ->columns(3),
                Forms\Components\Select::make('status')->options([
                    'published' => 'Published',
                    'draft' => 'Draft',
                ])->default('draft')->required(),
                Forms\Components\TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('thumbnail')->label('Thumbnail'),
            Tables\Columns\TextColumn::make('title')->label('Judul')->searchable(),
            Tables\Columns\TextColumn::make('category')->label('Kategori'),
            Tables\Columns\TextColumn::make('status')->badge()->color(fn (string $state) => match($state) {
                'published' => 'success',
                'draft' => 'gray',
                default => 'gray',
            }),
            Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
        ])->defaultSort('sort_order')
            ->reorderable('sort_order')
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
