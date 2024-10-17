<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Undangan;
use Illuminate\Http\Request;

class UndanganController extends Controller
{
    public function index()
    {
        $undangans = Undangan::all();
        return response()->json([
            'status' => 'success',
            'data' => $undangans
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'undangan' => 'required|string|max:255',
            'waktu' => 'required|date_format:Y-m-d H:i:s',
            'tempat' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        $undangan = Undangan::create($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Undangan created successfully!',
            'data' => $undangan
        ], 201);
    }

    public function show($id)
    {
        $undangan = Undangan::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data' => $undangan
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $undangan = Undangan::findOrFail($id);

        $request->validate([
            'tanggal' => 'required|date',
            'undangan' => 'required|string|max:255',
            'waktu' => 'required|date_format:Y-m-d H:i:s',
            'tempat' => 'required|string|max:255',
            'file_path' => 'required|string',
        ]);

        $undangan->update($request->all());

        return response()->json([
            'status' => 'success',
            'message' => 'Undangan updated successfully!',
            'data' => $undangan
        ], 200);
    }

    public function destroy($id)
    {
        $undangan = Undangan::findOrFail($id);
        $undangan->delete();

        return response()->json([
            'status' => 'success',
            'message' => 'Undangan deleted successfully!'
        ], 204);
    }
}