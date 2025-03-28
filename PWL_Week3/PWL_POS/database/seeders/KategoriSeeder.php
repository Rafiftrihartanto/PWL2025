<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'CML', 'kategori_nama' => 'Cemilan'],
            ['kategori_id' => 2, 'kategori_kode' => 'MNR', 'kategori_nama' => 'Minuman Ringan'],
        ];

        DB::table('m_kategori')->insert($data);
    }
}
