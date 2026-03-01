<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [];
        $id = 1;

        for ($i = 1; $i <= 10; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $barang = rand(1, 15);

                $data[] = [
                    'detail_id' => $id++,
                    'penjualan_id' => $i,
                    'barang_id' => $barang,
                    'harga' => 7000 + ($barang * 300),
                    'jumlah' => rand(1, 5),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
