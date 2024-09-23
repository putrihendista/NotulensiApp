<?php

namespace App\Livewire;

use Livewire\Component;

class BeritaAcara extends Component
{
    public $documents = [
        ['name' => 'Data Dukung Evaluasi', 'description' => 'TINDAK LANJUT LHE 2023 '],
        ['name' => 'Sistematika Renstra PTN Vokasi', 'description' => '0.1 KKE Poliwangi 2023'],
        // Tambahkan peserta lainnya sesuai kebutuhan
    ];

    public function render()
    {
        return view('livewire.berita-acara');
    }
}
