<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'stok_masuk' => 30, 'stok_keluar' => 5, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 2, 'stok_masuk' => 56, 'stok_keluar' => 10, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 3, 'stok_masuk' => 64, 'stok_keluar' => 8, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 4, 'stok_masuk' => 92, 'stok_keluar' => 15, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 5, 'stok_masuk' => 92, 'stok_keluar' => 12, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 6, 'stok_masuk' => 79, 'stok_keluar' => 20, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 7, 'stok_masuk' => 85, 'stok_keluar' => 18, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 8, 'stok_masuk' => 10, 'stok_keluar' => 2, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 9, 'stok_masuk' => 38, 'stok_keluar' => 5, 'tanggal_stok' => Carbon::now()],
            ['barang_id' => 10, 'stok_masuk' => 68, 'stok_keluar' => 7, 'tanggal_stok' => Carbon::now()],
        ];

        DB::table('t_stok')->insert($data);
    }
}
