<?php

namespace App\Livewire;

use Livewire\Component;

class UndanganLainnya extends Component
{
    public $meetings = [
        ['date' => '08 April 2024', 'invitation' => 'Rapat Senat Akademik', 'time' => '08.00 - Selesai', 'place' => 'B302'],
        ['date' => '15 Mei 2024', 'invitation' => 'Rapat Koordinasi', 'time' => '09.00 - Selesai', 'place' => 'B304'],
        // Add more meeting data here...
    ];

    public function render()
    {
        return view('livewire.undangan-lainnya');
    }
}
