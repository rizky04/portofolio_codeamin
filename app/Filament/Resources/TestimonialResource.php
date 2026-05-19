<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonialResource\Pages;
use App\Models\Testimonial;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class TestimonialResource extends Resource
{
    protected static ?string $model = Testimonial::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-chat-bubble-left-right'; }
    public static function getNavigationLabel(): string { return 'Testimoni'; }
    public static function getNavigationSort(): ?int { return 5; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nama')->required(),
            Forms\Components\TextInput::make('position')->label('Jabatan')->required(),
            Forms\Components\TextInput::make('company')->label('Perusahaan'),
            Forms\Components\FileUpload::make('photo')->label('Foto')->image()->disk('public')->directory('testimonials'),
            Forms\Components\Textarea::make('quote')->label('Kutipan')->rows(4)->required(),
            Forms\Components\Toggle::make('is_visible')->label('Tampilkan')->default(true),
            Forms\Components\TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\ImageColumn::make('photo')->label('Foto')->circular(),
            Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
            Tables\Columns\TextColumn::make('position')->label('Jabatan'),
            Tables\Columns\TextColumn::make('company')->label('Perusahaan'),
            Tables\Columns\IconColumn::make('is_visible')->label('Tampil')->boolean(),
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
            'index' => Pages\ListTestimonials::route('/'),
            'create' => Pages\CreateTestimonial::route('/create'),
            'edit' => Pages\EditTestimonial::route('/{record}/edit'),
        ];
    }
}
