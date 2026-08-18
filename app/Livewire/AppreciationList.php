<?php

namespace App\Livewire;

use Livewire\Component;

class AppreciationList extends Component
{
    public function render()
    {
        // Dummy data for appreciation
        $appreciations = [
            [
                'id' => 1,
                'image' => null,
                'date' => '12/08/2026',
                'headline' => 'Juara 1 Lomba UI/UX Design Nasional tingkat Mahasiswa',
                'delegations' => [
                    'Budi Santoso',
                    'Andi Wijaya',
                    'Siti Aminah'
                ]
            ],
            [
                'id' => 2,
                'image' => null,
                'date' => '05/07/2026',
                'headline' => 'Finalis Gemastik Kategori Pemrograman Bersaing Tingkat Nasional',
                'delegations' => [
                    'Rina Puspita',
                    'Fajar Siddiq',
                    'Dewi Sartika',
                    'Ahmad Faisal'
                ]
            ],
            [
                'id' => 3,
                'image' => null,
                'date' => '22/06/2026',
                'headline' => 'Juara Harapan 1 Lomba Bisnis TIK Nasional ITB',
                'delegations' => [
                    'Fahri Hamzah',
                    'Putri Lestari'
                ]
            ],
            [
                'id' => 4,
                'image' => null,
                'date' => '10/05/2026',
                'headline' => 'Juara 3 Kompetisi Web Development se-Indonesia',
                'delegations' => [
                    'Gilang Ramadhan',
                    'Maya Indah',
                    'Rudi Hermawan',
                    'Eka Prasetya',
                    'Dian Sastro'
                ]
            ],
        ];

        return view('livewire.appreciation-list', [
            'appreciations' => $appreciations
        ]);
    }
}
