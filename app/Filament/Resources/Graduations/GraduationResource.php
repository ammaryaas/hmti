<?php

namespace App\Filament\Resources\Graduations;

use App\Filament\Resources\Graduations\Pages\CreateGraduation;
use App\Filament\Resources\Graduations\Pages\EditGraduation;
use App\Filament\Resources\Graduations\Pages\ListGraduations;
use App\Filament\Resources\Graduations\Schemas\GraduationForm;
use App\Filament\Resources\Graduations\Tables\GraduationsTable;
use App\Models\Graduation;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class GraduationResource extends Resource
{
    protected static ?string $model = Graduation::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedAcademicCap;

    protected static ?string $recordTitleAttribute = 'Graduation';

    protected static string | UnitEnum | null $navigationGroup = 'Data';

    public static function form(Schema $schema): Schema
    {
        return GraduationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return GraduationsTable::configure($table);
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
            'index' => ListGraduations::route('/'),
            'create' => CreateGraduation::route('/create'),
            'edit' => EditGraduation::route('/{record}/edit'),
        ];
    }
}
