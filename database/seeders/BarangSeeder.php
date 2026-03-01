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
        $data = [];

        for ($i = 1; $i <= 15; $i++) {

            $data[] = [
                'barang_id' => $i,
                'kategori_id' => (($i - 1) % 5) + 1,
                'barang_kode' => 'BRG' . $i,
                'barang_nama' => 'Barang ' . $i,
                'harga_beli' => 5000 + ($i * 200),
                'harga_jual' => 7000 + ($i * 300),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
