<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{

    //* FUNGSI INDEX
    public function index() {
        $data_barang = Barang::all();
        $count = Barang::count();

        return view('barang.index', compact('data_barang', 'count'));
    }
}
