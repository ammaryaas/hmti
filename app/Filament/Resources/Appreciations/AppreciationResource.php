<?php

namespace App\Filament\Resources\Appreciations;

use App\Filament\Resources\Appreciations\Pages\CreateAppreciation;
use App\Filament\Resources\Appreciations\Pages\EditAppreciation;
use App\Filament\Resources\Appreciations\Pages\ListAppreciations;
use App\Filament\Resources\Appreciations\Schemas\AppreciationForm;
use App\Filament\Resources\Appreciations\Tables\AppreciationsTable;
use App\Models\Appreciation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AppreciationResource extends Resource
{
    protected static ?string $model = Appreciation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrophy;

    protected static ?string $recordTitleAttribute = 'title';

    protected static string | UnitEnum | null $navigationGroup = 'Corners';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return AppreciationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppreciationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\MahasiswaRelationManager::class
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAppreciations::route('/'),
            'create' => CreateAppreciation::route('/create'),
            'edit' => EditAppreciation::route('/{record}/edit'),
        ];
    }
}
