<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AboutUsKabinet extends Component
{
    public string $tableName = 'cabinets';

    public function render(): View
    {
        return view('about-us-kabinet', [
            'cabinets' => $this->cabinetItems(),
        ]);
    }

    private function cabinetItems(): Collection
    {
        $query = DB::table($this->tableName)->select([
            'id',
            'name',
            'logo',
            'vision',
            'mission',
            'photo',
            'status',
            'period',
        ]);

        return $query
            ->get()
            ->map(function ($item) {
                $item->mission = json_decode($item->mission ?? '[]');
                return $item;
            })
            ->map(function ($item) {
                $item->photo = json_decode($item->photo ?? '[]');
                return $item;
            });
    }
}
