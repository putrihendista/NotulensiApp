<?php

namespace App\Livewire;

use Livewire\Component;

class Notulensi extends Component
{
    public $tanggal;
    public $ruang;
    public $waktu;
    public $surat;
    public $tipe; // Tambahkan variabel tipe

    public function submit()
    {
        // Lakukan validasi atau penyimpanan data sesuai kebutuhan
        $this->validate([
            'tanggal' => 'required|date',
            'ruang' => 'required|string',
            'waktu' => 'required',
            'surat' => 'required|string',
            'tipe' => 'required|string', // Validasi tipe rapat
        ]);

        // Logika untuk menyimpan data (simulasi)
        // Contoh: simpan ke database
        // Meeting::create([
        //     'tanggal' => $this->tanggal,
        //     'ruang' => $this->ruang,
        //     'waktu' => $this->waktu,
        //     'surat' => $this->surat,
        //     'tipe' => $this->tipe,
        // ]);

        session()->flash('message', 'Notulensi berhasil disimpan!');
    }

    public function render()
    {
        return view('livewire.notulensi');
    }
}
