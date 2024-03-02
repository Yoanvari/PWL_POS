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
        // $jumlah = random_int(1, 2);
        // $barangId = random_int(1, 10);
        // $barangHargaJual = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual');
        // $data = [
        //     ['penjualan_id' => 1, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 1, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 1, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 2, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 2, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 2, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 3, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 3, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 3, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 4, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 4, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 4, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 5, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 5, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 5, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 6, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 6, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 6, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 7, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 7, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 7, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 8, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 8, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 8, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 9, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 9, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 9, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        //     ['penjualan_id' => 10, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 10, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],
        //     ['penjualan_id' => 10, 'barang_id' => $barangId, 'harga' => $barangHargaJual * $jumlah, 'jumlah' => $jumlah],

        // ];
        // DB::table('t_penjualan_detail')->insert($data);

        $data = [];

        for ($penjualanId = 1; $penjualanId <= 10; $penjualanId++) {

            $usedBarangIds = [];

            for ($transaksi = 1; $transaksi <= 3; $transaksi++) {

                do {
                    $barangId = random_int(1, 10);
                } while (in_array($barangId, $usedBarangIds));

                $jumlah = random_int(1, 2);

                $usedBarangIds[] = $barangId;


                $barangHargaJual = DB::table('m_barang')->where('barang_id', $barangId)->value('harga_jual');


                $data[] = [
                    'penjualan_id' => $penjualanId,
                    'barang_id' => $barangId,
                    'harga' => $barangHargaJual * $jumlah,
                    'jumlah' => $jumlah,
                ];
            }
        }


        DB::table('t_penjualan_detail')->insert($data);
    }
}
