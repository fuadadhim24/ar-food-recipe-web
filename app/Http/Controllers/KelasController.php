<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use DataTables;


use Illuminate\Http\Request;


class KelasController extends Controller
{

    public function index()
    {
        return view('admin.classes.index');
    }

    // Method to fetch data for DataTables
    public function getData(Request $request)
    {
        $classes = Classes::select(['id', 'title', 'intro', 'deskripsi', 'namaFoto', 'kategori'])->get();
        return response()->json(['data' => $classes]);
    }

    // Method to delete a class
    public function destroy($id)
    {
        $class = Classes::findOrFail($id);
        $class->delete();
        return response()->json(['success' => true]);
    }
    public function store(Request $request)
    {
        // Validasi input jika diperlukan
        $request->validate([
            'title' => 'required|string',
            'intro' => 'required|string',
            'deskripsi' => 'required|string',
            'kategori' => 'required|string',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Proses upload foto
        if ($request->hasFile('foto')) {
            $fotoPath = $request->file('foto')->store('public/foto-resep');
            $namaFoto = basename($fotoPath);
        } else {
            $namaFoto = null;
        }

        // Simpan data kelas ke dalam database
        Classes::create([
            'title' => $request->title,
            'intro' => $request->intro,
            'deskripsi' => $request->deskripsi,
            'kategori' => $request->kategori,
            'namaFoto' => $namaFoto,
        ]);

        return response()->json(['success' => true]);
    }

    public function viewSensitiveFile($fileName){
        $file = storage_path('app/public/foto-kelas/'.$fileName);
        return response()->file($file);
    }
}
