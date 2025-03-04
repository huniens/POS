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
            [
                'penjualan_id' => 1,
                'pembeli' => 'Beyoncé',
                'penjualan_kode' => 'PJN001',
                'penjualan_tanggal' => '2024-02-27 08:00:00',
                'user_id' => 1,
            ],
            [
                'penjualan_id' => 2,
                'pembeli' => 'Adele',
                'penjualan_kode' => 'PJN002',
                'penjualan_tanggal' => '2024-02-27 08:30:00',
                'user_id' => 1,
            ],
            [
                'penjualan_id' => 3,
                'pembeli' => 'Taylor Swift',
                'penjualan_kode' => 'PJN003',
                'penjualan_tanggal' => '2024-02-27 09:00:00',
                'user_id' => 1,
            ],
            [
                'penjualan_id' => 4,
                'pembeli' => 'Ed Sheeran',
                'penjualan_kode' => 'PJN004',
                'penjualan_tanggal' => '2024-02-27 09:30:00',
                'user_id' => 1,
            ],
            [
                'penjualan_id' => 5,
                'pembeli' => 'Bruno Mars',
                'penjualan_kode' => 'PJN005',
                'penjualan_tanggal' => '2024-02-27 08:00:00',
                'user_id' => 2,
            ],
            [
                'penjualan_id' => 6,
                'pembeli' => 'Billie Eilish',
                'penjualan_kode' => 'PJN006',
                'penjualan_tanggal' => '2024-02-27 08:30:00',
                'user_id' => 2,
            ],
            [
                'penjualan_id' => 7,
                'pembeli' => 'Lady Gaga',
                'penjualan_kode' => 'PJN007',
                'penjualan_tanggal' => '2024-02-27 08:00:00',
                'user_id' => 2,
            ],
            [
                'penjualan_id' => 8,
                'pembeli' => 'Dua Lipa',
                'penjualan_kode' => 'PJN008',
                'penjualan_tanggal' => '2024-02-27 08:30:00',
                'user_id' => 3,
            ],
            [
                'penjualan_id' => 9,
                'pembeli' => 'Justin Bieber',
                'penjualan_kode' => 'PJN009',
                'penjualan_tanggal' => '2024-02-27 08:00:00',
                'user_id' => 3,
            ],
            [
                'penjualan_id' => 10,
                'pembeli' => 'Ariana Grande',
                'penjualan_kode' => 'PJN010',
                'penjualan_tanggal' => '2024-02-27 08:30:00',
                'user_id' => 3,
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
