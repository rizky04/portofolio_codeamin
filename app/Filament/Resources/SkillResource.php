<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SkillResource\Pages;
use App\Models\Skill;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables;
use Filament\Tables\Table;

class SkillResource extends Resource
{
    protected static ?string $model = Skill::class;

    public static function getNavigationIcon(): string|\BackedEnum|null { return 'heroicon-o-code-bracket'; }
    public static function getNavigationLabel(): string { return 'Keahlian'; }
    public static function getNavigationSort(): ?int { return 2; }

    public static function form(Schema $schema): Schema
    {
        return $schema->schema([
            Forms\Components\TextInput::make('name')->label('Nama Skill')->required(),
            Forms\Components\Select::make('category')->label('Kategori')->required()->options([
                'frontend' => 'Frontend',
                'backend' => 'Backend',
                'devops' => 'DevOps',
                'tools' => 'Tools',
                'soft' => 'Soft Skill',
            ]),
            Forms\Components\Select::make('level')->label('Level')->required()->options([
                'beginner' => 'Beginner',
                'intermediate' => 'Intermediate',
                'advanced' => 'Advanced',
            ]),
            Forms\Components\TextInput::make('icon')->label('Ikon (URL atau emoji)'),
            Forms\Components\TextInput::make('sort_order')->label('Urutan')->numeric()->default(0),
            Forms\Components\Toggle::make('is_visible')->label('Tampilkan')->default(true),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('name')->label('Nama')->searchable(),
            Tables\Columns\TextColumn::make('category')->label('Kategori')->badge()->color(fn (string $state) => match($state) {
                'frontend' => 'primary',
                'backend' => 'success',
                'devops' => 'warning',
                'tools' => 'gray',
                'soft' => 'info',
                default => 'gray',
            }),
            Tables\Columns\TextColumn::make('level')->label('Level')->badge()->color(fn (string $state) => match($state) {
                'beginner' => 'gray',
                'intermediate' => 'warning',
                'advanced' => 'success',
                default => 'gray',
            }),
            Tables\Columns\IconColumn::make('is_visible')->label('Tampil')->boolean(),
            Tables\Columns\TextColumn::make('sort_order')->label('Urutan')->sortable(),
        ])->defaultSort('sort_order')
            ->reorderable('sort_order')
            ->filters([
                Tables\Filters\SelectFilter::make('category')->options([
                    'frontend' => 'Frontend',
                    'backend' => 'Backend',
                    'devops' => 'DevOps',
                    'tools' => 'Tools',
                    'soft' => 'Soft Skill',
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
            'index' => Pages\ListSkills::route('/'),
            'create' => Pages\CreateSkill::route('/create'),
            'edit' => Pages\EditSkill::route('/{record}/edit'),
        ];
    }
}
