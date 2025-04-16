<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barangs')->insert([
            [
                'kd_barang' => 'E001-03',
                'nama' => 'Kipas Angin',
                'harga' => 150000.00,
                'stok' => 120
            ],
            [
                'kd_barang' => 'K002-01',
                'nama' => 'Kipas Angin',
                'harga' => 150000.00,
                'stok' => 120
            ],
            [
                'kd_barang' => 'K002-02',
                'nama' => 'Kipas Angin',
                'harga' => 150000.00,
                'stok' => 120
            ],
        ]);
    }
}
