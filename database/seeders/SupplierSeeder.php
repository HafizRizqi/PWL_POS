<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP1', 'supplier_nama' => 'PT Sumber Makmur', 'supplier_alamat' => 'Malang'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP2', 'supplier_nama' => 'CV Sari Jaya', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP3', 'supplier_nama' => 'UD Berkah Sentosa', 'supplier_alamat' => 'Jakarta'],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
