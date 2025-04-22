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

    public function createView() {
        return view('actions.tambah');
    }

    public function store() {

    }
    
    public function editView() {
        return view('actions.edit');
    }

    public function update() {
        
    }

    public function destroy() {
            
    }
}
