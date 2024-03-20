<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $data = [
        //     ['kategori_id' => 1, 'kategori_kode' => 'KD001', 'kategori_nama' => 'Mainana & Hobi'],
        //     ['kategori_id' => 2, 'kategori_kode' => 'KD002', 'kategori_nama' => 'Elektronik'],
        //     ['kategori_id' => 3, 'kategori_kode' => 'KD003', 'kategori_nama' => 'Alat Rumah Tangga'],
        //     ['kategori_id' => 4, 'kategori_kode' => 'KD004', 'kategori_nama' => 'Otomotif'],
        //     ['kategori_id' => 5, 'kategori_kode' => 'KD005', 'kategori_nama' => 'Buku & Alat Tulis'],
        // ];
        $data = [
            ['kategori_id' => 6, 'kategori_kode' => 'CML', 'kategori_nama' => 'Cemilan', 'created_at' => now()],
            ['kategori_id' => 7, 'kategori_kode' => 'MNR', 'kategori_nama' => 'Minuman Ringan', 'created_at' => now()],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
