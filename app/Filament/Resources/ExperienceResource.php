<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExperienceResource\Pages;
use App\Models\Experience;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ExperienceResource extends Resource
{
    protected static ?string $model = Experience::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-briefcase'; }
    public static function getNavigationLabel(): string { return 'Pengalaman'; }
    public static function getNavigationGroup(): string|\UnitEnum|null { return 'Riwayat'; }
    public static function getNavigationSort(): ?int { return 1; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('company')->label('Perusahaan')->required(),
            Forms\Components\TextInput::make('position')->label('Posisi/Jabatan')->required(),
            Forms\Components\DatePicker::make('start_date')->label('Mulai')->required(),
            Forms\Components\DatePicker::make('end_date')->label('Selesai')
                ->disabled(fn ($get) => $get('is_current')),
            Forms\Components\Toggle::make('is_current')->label('Masih Bekerja di Sini')->live(),
            Forms\Components\Textarea::make('description')->label('Deskripsi Tugas')->rows(4),
            Forms\Components\TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('company')->label('Perusahaan')->searchable(),
            Tables\Columns\TextColumn::make('position')->label('Posisi'),
            Tables\Columns\TextColumn::make('start_date')->label('Mulai')->date('M Y'),
            Tables\Columns\TextColumn::make('end_date')->label('Selesai')
                ->formatStateUsing(fn ($state) => $state ? \Carbon\Carbon::parse($state)->format('M Y') : 'Sekarang'),
            Tables\Columns\IconColumn::make('is_current')->label('Aktif')->boolean(),
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
            'index' => Pages\ListExperiences::route('/'),
            'create' => Pages\CreateExperience::route('/create'),
            'edit' => Pages\EditExperience::route('/{record}/edit'),
        ];
    }
}
