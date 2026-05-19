<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TechnologyResource\Pages;
use App\Models\Technology;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class TechnologyResource extends Resource
{
    protected static ?string $model = Technology::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-tag'; }
    public static function getNavigationLabel(): string { return 'Teknologi'; }
    public static function getNavigationGroup(): string|\UnitEnum|null { return 'Proyek'; }
    public static function getNavigationSort(): ?int { return 1; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nama Teknologi')->required(),
            Forms\Components\TextInput::make('icon')->label('Ikon (URL atau emoji)'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
            Tables\Columns\TextColumn::make('icon')->label('Ikon'),
            Tables\Columns\TextColumn::make('projects_count')->label('Dipakai di')->counts('projects')->suffix(' proyek'),
        ])->actions([
            \Filament\Actions\EditAction::make(),
            \Filament\Actions\DeleteAction::make(),
        ])->bulkActions([
            \Filament\Actions\BulkActionGroup::make([
                \Filament\Actions\DeleteBulkAction::make(),
            ]),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTechnologies::route('/'),
            'create' => Pages\CreateTechnology::route('/create'),
            'edit' => Pages\EditTechnology::route('/{record}/edit'),
        ];
    }
}
