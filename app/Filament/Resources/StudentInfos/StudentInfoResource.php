<?php

namespace App\Filament\Resources\StudentInfos;

use App\Filament\Resources\StudentInfos\Pages\CreateStudentInfo;
use App\Filament\Resources\StudentInfos\Pages\EditStudentInfo;
use App\Filament\Resources\StudentInfos\Pages\ListStudentInfos;
use App\Filament\Resources\StudentInfos\Schemas\StudentInfoForm;
use App\Filament\Resources\StudentInfos\Tables\StudentInfosTable;
use App\Models\StudentInfo;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class StudentInfoResource extends Resource
{
    protected static ?string $model = StudentInfo::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInformationCircle;

    protected static ?string $recordTitleAttribute = 'title';

    protected static string | UnitEnum | null $navigationGroup = 'Data';

    protected static ?int $navigationSort = 5;

    public static function form(Schema $schema): Schema
    {
        return StudentInfoForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StudentInfosTable::configure($table);
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
            'index' => ListStudentInfos::route('/'),
            'create' => CreateStudentInfo::route('/create'),
            'edit' => EditStudentInfo::route('/{record}/edit'),
        ];
    }
}
