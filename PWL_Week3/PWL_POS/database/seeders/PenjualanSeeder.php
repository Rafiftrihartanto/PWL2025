<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];

        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'user_id' => rand(1, 3), 
                'tanggal_penjualan' => Carbon::now()->subDays(rand(1, 30))->toDateString(), 
                'total_harga' => rand(50000, 200000),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        DB::table('t_penjualan')->insert($data);
    }
}
