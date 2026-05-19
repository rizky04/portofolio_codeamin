<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfileResource\Pages;
use App\Models\Profile;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ProfileResource extends Resource
{
    protected static ?string $model = Profile::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-user-circle'; }
    public static function getNavigationLabel(): string { return 'Profil'; }
    public static function getNavigationSort(): ?int { return 1; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Section::make('Identitas')->schema([
                Forms\Components\TextInput::make('name')->label('Nama')->required(),
                Forms\Components\TextInput::make('tagline')->label('Tagline')->required(),
                Forms\Components\Textarea::make('bio')->label('Bio')->rows(4)->required(),
                Forms\Components\FileUpload::make('photo')->label('Foto Profil')->image()->disk('public')->directory('profile'),
                Forms\Components\FileUpload::make('cv_file')->label('File CV (PDF)')->acceptedFileTypes(['application/pdf'])->disk('public')->directory('cv'),
            ]),
            Section::make('Kontak & Sosial Media')->schema([
                Forms\Components\TextInput::make('email')->email()->required(),
                Forms\Components\TextInput::make('whatsapp')->label('WhatsApp'),
                Forms\Components\TextInput::make('github')->label('GitHub URL'),
                Forms\Components\TextInput::make('linkedin')->label('LinkedIn URL'),
                Forms\Components\TextInput::make('location')->label('Lokasi'),
            ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('photo')->label('Foto')->circular(),
            Tables\Columns\TextColumn::make('name')->label('Nama'),
            Tables\Columns\TextColumn::make('tagline')->label('Tagline'),
            Tables\Columns\TextColumn::make('email'),
        ])->actions([
            \Filament\Actions\EditAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProfiles::route('/'),
            'create' => Pages\CreateProfile::route('/create'),
            'edit' => Pages\EditProfile::route('/{record}/edit'),
        ];
    }
}
