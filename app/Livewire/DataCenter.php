<?php

namespace App\Livewire;

use App\Models\DataCenter as DataCenterModel;
use Livewire\Component;

class DataCenter extends Component
{
    public function visit(int $id)
    {
        $item = DataCenterModel::find($id);
        if ($item) {
            $item->increment('views');
            return redirect()->away($item->link);
        }
    }

    public function render()
    {
        return view('livewire.data-center', [
            'dataCenters' => DataCenterModel::orderBy('id', 'asc')->get(),
        ]);
    }
}
