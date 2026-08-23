<?php

namespace App\Filament\Resources\DataCenters;

use App\Filament\Resources\DataCenters\Pages\CreateDataCenter;
use App\Filament\Resources\DataCenters\Pages\EditDataCenter;
use App\Filament\Resources\DataCenters\Pages\ListDataCenters;
use App\Filament\Resources\DataCenters\Schemas\DataCenterForm;
use App\Filament\Resources\DataCenters\Tables\DataCentersTable;
use App\Models\DataCenter;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DataCenterResource extends Resource
{
    protected static ?string $model = DataCenter::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCircleStack;

    protected static ?string $recordTitleAttribute = 'DataCenter';

    protected static string | UnitEnum | null $navigationGroup = 'Data';
    
    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return DataCenterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DataCentersTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListDataCenters::route('/'),
            'create' => CreateDataCenter::route('/create'),
            'edit' => EditDataCenter::route('/{record}/edit'),
        ];
    }
}
