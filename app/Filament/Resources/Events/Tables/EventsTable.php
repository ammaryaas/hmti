<?php

namespace App\Filament\Resources\Events\Tables;

use Carbon\Carbon;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

use function PHPUnit\Framework\isNull;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title'),
                // TextColumn::make('desc')
                //     ->label('Description'),
                // TextColumn::make('start_at'),
                // TextColumn::make('end_at'),
                TextColumn::make('period')
                    // ->state(function ($record) {
                    //     $start = Carbon::parse($record->start_at);
                    //     $end = ($record->end_at ? Carbon::parse($record->end_at) : null);

                    //     if (is_null($end)) {
                    //         return $start->translatedFormat('d F Y');
                    //     }

                    //     if ($start->isSameDay($end)) {
                    //         return $start->translatedFormat('d F Y') . ', ' .
                    //             $start->format('H.i') . ' - ' .
                    //             $end->format('H.i');
                    //     } elseif ($start->isSameMonth($end)) {
                    //         return $start->translatedFormat('d') . ' - ' .
                    //             $end->translatedFormat('d F Y') . ', ' .  
                    //             $start->format('H.i') . ' - ' .
                    //             $end->format('H.i');
                    //     }

                    //     return $start->translatedFormat('d F Y') . ' - ' .
                    //         $end->translatedFormat('d F Y') . ', ' .
                    //         $start->format('H.i') . ' - ' .
                    //         $end->format('H.i'); 
                    // }),
                    ->state(function ($record) {
                        $start = $record->start_at;
                        $end = $record->end_at;

                        // Tidak punya end date → hanya satu tanggal
                        if (!$end) {
                            return $record->has_time
                                ? $start->translatedFormat('d F Y') . ' · ' . $start->format('H.i')
                                : $start->translatedFormat('d F Y');
                        }

                        // Start dan end di hari yang sama
                        if ($start->isSameDay($end)) {
                            $date = $start->translatedFormat('d F Y');

                            return $record->has_time
                                ? "{$date} · {$start->format('H.i')} - {$end->format('H.i')}"
                                : $date;
                        }

                        // Hari berbeda, bulan dan tahun sama
                        if ($start->isSameMonth($end)) {
                            $date = $start->format('d') . ' - ' .
                                $end->translatedFormat('d F Y');

                            return $record->has_time
                                ? "{$date} · {$start->format('H.i')} - {$end->format('H.i')}"
                                : $date;
                        }

                        // Bulan/tahun berbeda
                        $date = $start->translatedFormat('d F Y') . ' - ' .
                            $end->translatedFormat('d F Y');

                        return $record->has_time
                            ? "{$date} · {$start->format('H.i')} - {$end->format('H.i')}"
                            : $date;
                    }),
                TextColumn::make('location')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
