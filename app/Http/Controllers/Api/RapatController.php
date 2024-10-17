<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Rapat;
use Illuminate\Http\Request;

class RapatController extends Controller
{
    public function index()
    {
        $rapats = Rapat::all();
        return response()->json([
            'status' => 'success',
            'data' => $rapats
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tipe_rapat' => 'required|string|max:255',
        ]);

        $rapat = Rapat::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Jabatan created successfully!',
            'data' => $rapat
        ], 201);
    }

    public function show($id)
    {
        $rapat = Rapat::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $rapat
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $rapat = Rapat::findOrFail($id);

        $request->validate([
            'type_rapat' => 'required|string|max:255',
        ]);

        $rapat->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Jabatan updated successfully!',
            'data' => $rapat
        ], 200);
    }

    public function destroy($id)
    {
        $rapat = Rapat::findOrFail($id);
        $rapat->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Jabatan deleted successfully!'
        ], 204);
    }
}