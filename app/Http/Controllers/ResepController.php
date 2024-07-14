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

}
