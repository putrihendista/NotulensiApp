<?php

namespace App\Livewire;

use Livewire\Component;

class TindakLanjutNotulensi extends Component
{
    public $rencanaTindakLanjut = [
        [
            'catatan' => 'Perencanaan',
            'tindak_lanjut' => 'Revisi Renstra tahun 2024',
            'due_date' => '12-26 Juni 2024',
            'pic' => 'Tim Review'
        ],
        [
            'catatan' => 'Peningkatan Kualitas AKIP',
            'tindak_lanjut' => 'Menindaklanjuti catatan rekomendasi pada LHE tahun sebelumnya',
            'due_date' => '27 Juni 2024',
            'pic' => 'Tim Evaluasi'
        ],
        [
            'catatan' => 'Peningkatan Kualitas AKIP',
            'tindak_lanjut' => 'Setiap unit/satuan kerja dan setiap pegawai memahami dan peduli',
            'due_date' => '12-30 Juni 2024',
            'pic' => 'Tim Evaluasi'
        ]
    ];

    public function render()
    {
        return view('livewire.tindak-lanjut-notulensi');
    }
}
