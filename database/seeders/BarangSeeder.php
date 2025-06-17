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
                'kd_barang' => 'E002-04',
                'nama' => 'Laptop Asus',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-01',
                'nama' => 'MSI Claw',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-02',
                'nama' => 'AGON AG275QXR',
                'harga' => 5000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-05',
                'nama' => 'Lenovo G3 15ACH6',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-06',
                'nama' => 'ROG PHONE',
                'harga' => 10000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-07',
                'nama' => 'Asus TUF',
                'harga' => 12500000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-08',
                'nama' => 'ASUS ROG',
                'harga' => 32000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-09',
                'nama' => 'Koodo Solar',
                'harga' => 700000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-10',
                'nama' => 'Pen',
                'harga' => 52000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-11',
                'nama' => 'Macbook 2017',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-12',
                'nama' => 'Macbook M1 Pro',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-13',
                'nama' => 'Macbook M3',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
            [
                'kd_barang' => 'E002-14',
                'nama' => 'Macbook M2 2024',
                'harga' => 12000000.00,
                'stok' => 80,
                'created_at'=>now(),
                'updated_at'=>now()
            ],
        ]);
    }
}
