<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactMessageResource\Pages;
use App\Models\ContactMessage;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class ContactMessageResource extends Resource
{
    protected static ?string $model = ContactMessage::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-envelope'; }
    public static function getNavigationLabel(): string { return 'Pesan Masuk'; }
    public static function getNavigationSort(): ?int { return 7; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nama')->disabled(),
            Forms\Components\TextInput::make('email')->label('Email')->disabled(),
            Forms\Components\Textarea::make('message')->label('Pesan')->rows(6)->disabled(),
            Forms\Components\Toggle::make('is_read')->label('Sudah Dibaca'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
            Tables\Columns\TextColumn::make('email')->label('Email'),
            Tables\Columns\TextColumn::make('message')->label('Pesan')->limit(50),
            Tables\Columns\IconColumn::make('is_read')->label('Dibaca')->boolean(),
            Tables\Columns\TextColumn::make('created_at')->label('Diterima')->dateTime('d M Y H:i')->sortable(),
        ])->defaultSort('created_at', 'desc')
            ->filters([
                Tables\Filters\TernaryFilter::make('is_read')->label('Status Baca')
                    ->trueLabel('Sudah Dibaca')
                    ->falseLabel('Belum Dibaca'),
            ])
            ->actions([
                \Filament\Actions\ViewAction::make(),
                \Filament\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                \Filament\Actions\BulkActionGroup::make([
                    \Filament\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactMessages::route('/'),
            'view' => Pages\ViewContactMessage::route('/{record}'),
        ];
    }
}
