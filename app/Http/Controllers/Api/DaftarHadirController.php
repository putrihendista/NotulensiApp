<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DaftarHadir;
use Illuminate\Http\Request;

class DaftarHadirController extends Controller
{ public function index()
    {
        return DaftarHadir::with(['undangan', 'user', 'jabatan', 'acara'])->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_undangan' => 'required|exists:undangan,id',
            'id_user' => 'required|exists:users,id',
            'id_jabatan' => 'required|exists:jabatan,id',
            'id_acara' => 'required|exists:acara,id_acara',
            'status' => 'required|boolean',
        ]);

        return DaftarHadir::create($request->all());
    }

    public function show($id)
    {
        return DaftarHadir::with(['undangan', 'user', 'jabatan', 'acara'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $daftarHadir = DaftarHadir::findOrFail($id);

        $daftarHadir->update($request->all());

        return $daftarHadir;
    }

    public function destroy($id)
    {
        $daftarHadir = DaftarHadir::findOrFail($id);
        $daftarHadir->delete();

        return response()->json(['message' => 'Daftar hadir deleted successfully']);
    }
}