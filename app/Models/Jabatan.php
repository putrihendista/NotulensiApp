<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
    ];
    public function daftarHadir() {
        return $this->hasMany(DaftarHadir::class, 'id_jabatan');
    }
    
}
