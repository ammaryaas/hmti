<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class WisudaPage extends Component
{
    public function render(): View
    {
        $graduates = [
            [
                'name' => 'Salsabila Putri',
                'nim' => 'H1D020032',
                'class_year' => '2020',
                'photo' => asset('assets/detail1.png'),
            ],
            [
                'name' => 'Rafi Aditya',
                'nim' => 'H1D020045',
                'class_year' => '2020',
                'photo' => asset('assets/detail2.png'),
            ],
            [
                'name' => 'Nadya Rahma',
                'nim' => 'H1D020058',
                'class_year' => '2020',
                'photo' => asset('assets/detail3.png'),
            ],
            [
                'name' => 'Farhan Ilham',
                'nim' => 'H1D020071',
                'class_year' => '2020',
                'photo' => asset('assets/detail4.png'),
            ],
            [
                'name' => 'Dina Oktavia',
                'nim' => 'H1D020086',
                'class_year' => '2020',
                'photo' => asset('assets/detail5.png'),
            ],
            [
                'name' => 'Andi Pratama',
                'nim' => 'H1D020093',
                'class_year' => '2020',
                'photo' => asset('assets/detail6.png'),
            ],
        ];

        return view('livewire.wisuda-page', [
            'graduates' => $graduates,
            'groupPhoto' => asset('assets/detail1.png'),
        ]);
    }
}
