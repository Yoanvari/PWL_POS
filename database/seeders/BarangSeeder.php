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
        $data = [
            ['kategori_id' => '1', 'barang_kode' => 'BD001', 'barang_nama' => 'Puzzle Edukatif', 'harga_beli' => '100000', 'harga_jual' => '150000'],
            ['kategori_id' => '1', 'barang_kode' => 'BD002', 'barang_nama' => 'Catur', 'harga_beli' => '20000', 'harga_jual' => '30000'],
            ['kategori_id' => '2', 'barang_kode' => 'BD003', 'barang_nama' => 'Laptop Dell XPS 13', 'harga_beli' => '20000000', 'harga_jual' => '22000000'],
            ['kategori_id' => '2', 'barang_kode' => 'BD004', 'barang_nama' => 'Canon EOS R6 ', 'harga_beli' => '25000000', 'harga_jual' => '28000000'],
            ['kategori_id' => '3', 'barang_kode' => 'BD005', 'barang_nama' => 'Vacuum Cleaner', 'harga_beli' => '2000000', 'harga_jual' => '3000000'],
            ['kategori_id' => '3', 'barang_kode' => 'BD006', 'barang_nama' => 'Airfryer', 'harga_beli' => '1500000', 'harga_jual' => '2250000'],
            ['kategori_id' => '4', 'barang_kode' => 'BD007', 'barang_nama' => 'Dash Cam', 'harga_beli' => '300000', 'harga_jual' => '400000'],
            ['kategori_id' => '4', 'barang_kode' => 'BD008', 'barang_nama' => 'Oli Mobil', 'harga_beli' => '200000', 'harga_jual' => '250000'],
            ['kategori_id' => '5', 'barang_kode' => 'BD009', 'barang_nama' => 'Gel Pen', 'harga_beli' => '10000', 'harga_jual' => '15000'],
            ['kategori_id' => '5', 'barang_kode' => 'BD010', 'barang_nama' => 'Classic Notebook', 'harga_beli' => '80000', 'harga_jual' => '100000'],
        ];
        DB::table('m_barang')->insert($data);
    }
}
