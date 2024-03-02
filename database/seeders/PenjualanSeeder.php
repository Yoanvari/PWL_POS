<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['pembeli' => 'Cust001', 'user_id' => 3, 'penjualan_kode' => 'PD001', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust002', 'user_id' => 3, 'penjualan_kode' => 'PD002', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust003', 'user_id' => 3, 'penjualan_kode' => 'PD003', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust004', 'user_id' => 3, 'penjualan_kode' => 'PD004', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust005', 'user_id' => 3, 'penjualan_kode' => 'PD005', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust006', 'user_id' => 3, 'penjualan_kode' => 'PD006', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust007', 'user_id' => 3, 'penjualan_kode' => 'PD007', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust008', 'user_id' => 3, 'penjualan_kode' => 'PD008', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust009', 'user_id' => 3, 'penjualan_kode' => 'PD009', 'penjualan_tanggal' => now()],
            ['pembeli' => 'Cust010', 'user_id' => 3, 'penjualan_kode' => 'PD010', 'penjualan_tanggal' => now()],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
