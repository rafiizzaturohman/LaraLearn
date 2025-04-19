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
                'kd_barang' => 'E002-03',
                'nama' => 'Handheld Gaming',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
