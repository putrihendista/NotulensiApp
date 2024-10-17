<?php

namespace App\Livewire;

use Livewire\Component;

class HalamanDaftarHadir extends Component
{
    public $acaras = [
            ['name' => 'Rapat Senat Akademik', 'date' => '2024-04-09'],
            ['name' => 'Rapat Koordinasi', 'date' => '2024-05-15'],
            ['name' => 'Rapat Pimpinan', 'date' => '2024-05-30'],
            ['name' => 'Rapat Evaluasi PRODI', 'date' => '2024-06-19'],
            ['name' => 'Rapat Kerja', 'date' => '2024-07-11'],
            // Add more meetings as necessary
        ];

    public $search = ''; // Properti untuk pencarian

    public function getFilteredAcarasProperty()
{
    // Filter dokumen berdasarkan search
    return array_filter($this->acaras, function($acara) {
        return stripos($acara['name'], $this->search) !== false;
    });
}
    public function render()
    {
        return view('livewire.halaman-daftar-hadir', [
            'filteredAcaras' => $this->getFilteredAcarasProperty(),
        ]);
    }
}
