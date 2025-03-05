<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Nasi Goreng', 'harga' => 20000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Mie Ayam', 'harga' => 18000],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'B003', 'barang_nama' => 'Teh Botol', 'harga' => 5000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'B004', 'barang_nama' => 'Shampoo', 'harga' => 25000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'B005', 'barang_nama' => 'Sabun Mandi', 'harga' => 10000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'B006', 'barang_nama' => 'Detergen', 'harga' => 15000],
            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'B007', 'barang_nama' => 'Pewangi Ruangan', 'harga' => 18000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'B008', 'barang_nama' => 'Susu Formula', 'harga' => 50000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'B009', 'barang_nama' => 'Pampers', 'harga' => 55000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'B010', 'barang_nama' => 'Headset', 'harga' => 75000],
        ];

        DB::table('m_barang')->insert($data);
    }
}
