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
}
