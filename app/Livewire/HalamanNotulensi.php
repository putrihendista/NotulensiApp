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
        // Tambahkan dokumen lainnya sesuai kebutuhan
    ];

    public $search = ''; // Properti untuk pencarian

    public function getFilteredDocumentsProperty()
    {
        // Filter dokumen berdasarkan search
        return array_filter($this->documents, function($document) {
            return stripos($document['name'], $this->search) !== false;
        });
    }

    public function render()
    {
        return view('livewire.halaman-notulensi', [
            'filteredDocuments' => $this->filteredDocuments, // Kirim dokumen yang sudah difilter
        ]);
    }
}
