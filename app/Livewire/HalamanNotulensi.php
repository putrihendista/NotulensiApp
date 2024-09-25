<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanNotulensi extends Component
{
    public $documents = [
        ['name' => 'Data Dukung Evaluasi'],
        ['name' => 'Sistematika Renstra PTN Vokasi'],
        ['name' => 'Cascading IKU Sampai Komponen'],
        ['name' => 'RKT 2025 Politeknik dan AKN'],
        ['name' => 'Asistensi SAKIP Tahun 2024'],
        // Tambahkan peserta lainnya sesuai kebutuhan
    ];
    
    public function render()
    {
        return view('livewire.halaman-notulensi');
    }
}
