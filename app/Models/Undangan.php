<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undangan extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'tanggal',
        'undangan',
        'waktu',
        'tempat',
        'file_path',
    ];

    public function daftarHadir() {
        return $this->hasMany(DaftarHadir::class, 'id_undangan');
    }
}
