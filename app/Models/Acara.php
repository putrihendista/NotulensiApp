<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acara extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_acara'
    ];

    // public function notulensi() {
    //     return $this->hasMany(Notulensi::class, 'id_rapat');
    // }

    public function daftarHadir() {
        return $this->hasMany(DaftarHadir::class, 'id_acara');
    }
}
