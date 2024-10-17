<?php

namespace App\Livewire;

use Livewire\Component;

class LihatDaftarHadir extends Component
{
    public $peserta = [
        ['nama' => 'M. Shoft\'ul Amin, S.T., M.T.', 'jabatan' => 'Pengarah'],
        ['nama' => 'Alfin Hidayat, S.T., M.T.', 'jabatan' => 'KA SAKIP'],
        ['nama' => 'Ika Yuniwati, S.Pd., M.Si.', 'jabatan' => 'Sekretaris Reviu Sakip'],
        // Tambahkan peserta lainnya sesuai kebutuhan
    ];
    
    public function render()
    {
        return view('livewire.lihat-daftar-hadir');
    }
}
