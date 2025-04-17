<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barangs = Barang::all();

        return view('barang', compact('barangs'));
    }

    public function viewTambah() {
        return view('actions.tambah');
    }

    public function store(Request $request) {
        $request->validate([
            'kd_barang' => 'required|unique:barangs',
            'nama' => 'required',
            'harga'=>'required',
            'stok'=>'required'
        ]);

        Barang::create([
            'kd_barang' => $request->kd_barang,
            'nama' => $request->nama,
            'harga'=> $request->harga,
            'stok'=> $request->stok,
        ]);

        return redirect()->route('barang.index')->with('success', 'Berhasil menambahkan produk');
    }
}
