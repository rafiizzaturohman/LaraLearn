<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index() {
        $barangs = Barang::all();

        return view('barang', compact('barangs'));
    }

    public function createView() {
        return view('actions.create');
    }

    public function store(Request $request): RedirectResponse 
    {
        $validated = $request->validate([
            'kd_barang' => 'required',
            'nama' => 'required|max:150',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
        ]);

        Barang::create([
            'kd_barang' => $validated['kd_barang'],
            'nama' => $validated['nama'],
            'harga' => $validated['harga'],
            'stok' => $validated['stok'],
            'created_at' => now()
        ]);

        return redirect()->route('barang')->with('success', 'Data berhasil ditambahkan');
    }
    
    public function editView() {
        return view('actions.edit');
    }

    public function update() {
        
    }

    public function destroy($id): RedirectResponse {
        $barang = Barang::findOrFail($id);

        $barang->delete();

        return redirect()->route('barang')->with('success', 'Data barang berhasil dihapus');
    }
}
