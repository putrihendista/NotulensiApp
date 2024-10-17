<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Acara;
use Illuminate\Http\Request;

class AcaraController extends Controller
{
    public function index()
    {
        $acaras = Acara::all();
        return response()->json([
            'status' => 'success',
            'data' => $acaras
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_acara' => 'required|string|max:255',
        ]);

        $acara = Acara::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Jabatan created successfully!',
            'data' => $acara
        ], 201);
    }

    public function show($id)
    {
        $acara = Acara::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $acara
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $acara = Acara::findOrFail($id);

        $request->validate([
            'nama_acara' => 'required|string|max:255',
        ]);

        $acara->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Jabatan updated successfully!',
            'data' => $acara
        ], 200);
    }

    public function destroy($id)
    {
        $acara = Acara::findOrFail($id);
        $acara->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Jabatan deleted successfully!'
        ], 204);
    }
}
