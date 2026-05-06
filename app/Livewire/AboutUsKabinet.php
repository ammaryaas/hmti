<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AboutUsKabinet extends Component
{
    public string $tableName = 'cabinets';

    /**
    * @return \Livewire\View
    */
    public function render()
    {
        return view('about-us-kabinet', [
            'cabinets' => $this->cabinetItems(),
        ])
        ->layout('layouts.app', [
            'title' => 'Kabinet HMTI',
            'bodyClass' => 'bg-white text-slate-900 antialiased',
            'activeNav' => 'about',
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
