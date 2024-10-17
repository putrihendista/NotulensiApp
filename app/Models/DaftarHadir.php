<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarHadir extends Model
{
    use HasFactory;
    protected $table = 'daftar_hadir';

    protected $fillable = [
        'id_undangan', 'id_user', 'id_jabatan', 'id_acara', 'status'
    ];

    public function undangan() {
        return $this->belongsTo(Undangan::class, 'id_undangan');
    }

    public function user() {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function jabatan() {
        return $this->belongsTo(Jabatan::class, 'id_jabatan');
    }

    public function acara() {
        return $this->belongsTo(Acara::class, 'id_acara');
    }
}
