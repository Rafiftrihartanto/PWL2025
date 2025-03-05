<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

  
        for ($penjualan_id = 1; $penjualan_id <= 10; $penjualan_id++) {
            // Setiap transaksi memiliki 3 barang yang berbeda
            for ($i = 0; $i < 3; $i++) {
                $barang_id = rand(1, 10); // Barang ID acak dari 1-10
                $jumlah = rand(1, 5); // Jumlah barang acak (1-5)
                $harga_satuan = rand(10000, 50000); // Harga per barang acak
                $subtotal = $jumlah * $harga_satuan;

                $data[] = [
                    'penjualan_id' => $penjualan_id,
                    'barang_id' => $barang_id,
                    'jumlah' => $jumlah,
                    'subtotal' => $subtotal,
                    'created_at' => Carbon::now(),
                    'updated_at' => Carbon::now(),
                ];
            }
        }

        // Masukkan 30 data ke dalam tabel t_penjualan_detail
        DB::table('t_penjualan_detail')->insert($data);
    }
}
