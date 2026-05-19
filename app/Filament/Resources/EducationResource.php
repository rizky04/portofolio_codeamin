<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EducationResource\Pages;
use App\Models\Education;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class EducationResource extends Resource
{
    protected static ?string $model = Education::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-academic-cap'; }
    public static function getNavigationLabel(): string { return 'Pendidikan'; }
    public static function getNavigationGroup(): string|\UnitEnum|null { return 'Riwayat'; }
    public static function getNavigationSort(): ?int { return 2; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('institution')->label('Institusi/Sekolah')->required(),
            Forms\Components\TextInput::make('degree')->label('Gelar/Jenjang')->required(),
            Forms\Components\TextInput::make('field')->label('Jurusan')->required(),
            Forms\Components\TextInput::make('start_year')->label('Tahun Masuk')->numeric()->minValue(1990)->maxValue(2099)->required(),
            Forms\Components\TextInput::make('end_year')->label('Tahun Lulus')->numeric()->minValue(1990)->maxValue(2099),
            Forms\Components\Textarea::make('description')->label('Deskripsi')->rows(3),
            Forms\Components\TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('institution')->label('Institusi')->searchable(),
            Tables\Columns\TextColumn::make('degree')->label('Gelar'),
            Tables\Columns\TextColumn::make('field')->label('Jurusan'),
            Tables\Columns\TextColumn::make('start_year')->label('Masuk'),
            Tables\Columns\TextColumn::make('end_year')->label('Lulus')->default('-'),
        ])->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->actions([
                \Filament\Actions\EditAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEducations::route('/'),
            'create' => Pages\CreateEducation::route('/create'),
            'edit' => Pages\EditEducation::route('/{record}/edit'),
        ];
    }
}
