<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipes;

class ResepController extends Controller
{
    public function index()
    {
        return view('admin.recipes.index');
    }

    // Method to fetch data for DataTables
    public function getData(Request $request)
    {
        $classes = Recipes::select(['id', 'nama', 'deskripsi', 'levelKesulitan', 'durasiMasak', 'bahan', 'alat', 'stepMasak', 'namaFoto'])->get();
        return response()->json(['data' => $classes]);
    }

    // Method to delete a class
    public function destroy($id)
    {
        $class = Recipes::findOrFail($id);
        $class->delete();
        return response()->json(['success' => true]);
    }
    
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'levelKesulitan' => 'required',
            'durasiMasak' => 'required|string',
            'bahan' => 'required',
            'alat' => 'required',
            'stepMasak' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto-resep');
            $namaFoto = basename($fotoPath); // Dapatkan nama file dari path
        } else {
            $namaFoto = null;
        }

        // Simpan data resep ke dalam database
        Recipes::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'levelKesulitan' => $request->levelKesulitan,
            'durasiMasak' => $request->durasiMasak,
            'bahan' => json_encode($request->bahan),
            'alat' => json_encode($request->alat),
            'stepMasak' => json_encode($request->stepMasak),
            'namaFoto' => $namaFoto,
        ]);

        return response()->json(['success' => true]);
    }

}
