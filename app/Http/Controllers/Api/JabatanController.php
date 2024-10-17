<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    
        public function index()
        {
            $jabatans = Jabatan::all();
            return response()->json([
                'status' => 'success',
                'data' => $jabatans
            ], 200);
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'nama' => 'required|string|max:255',
            ]);
    
            $jabatan = Jabatan::create($request->all());
    
            return response()->json([
                'status' => 'success',
                'message' => 'Jabatan created successfully!',
                'data' => $jabatan
            ], 201);
        }
    
        public function show($id)
        {
            $jabatan = Jabatan::findOrFail($id);
            return response()->json([
                'status' => 'success',
                'data' => $jabatan
            ], 200);
        }
    
        public function update(Request $request, $id)
        {
            $jabatan = Jabatan::findOrFail($id);
    
            $request->validate([
                'nama' => 'required|string|max:255',
            ]);
    
            $jabatan->update($request->all());
    
            return response()->json([
                'status' => 'success',
                'message' => 'Jabatan updated successfully!',
                'data' => $jabatan
            ], 200);
        }
    
        public function destroy($id)
        {
            $jabatan = Jabatan::findOrFail($id);
            $jabatan->delete();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Jabatan deleted successfully!'
            ], 204);
        }
    }