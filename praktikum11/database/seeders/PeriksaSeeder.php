<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriksaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('periksas')->insert([
            [
                'no' => 1,
                'tanggal' => '2024-03-01',
                'berat' => 65.5,
                'tinggi' => 170,
                'tensi' => '120/80',
                'keterangan' => 'Normal',
                'pasien_id' => 1,
                'dokter_id' => 1,
            ],
            [
                'no' => 2,
                'tanggal' => '2024-03-05',
                'berat' => 70,
                'tinggi' => 165,
                'tensi' => '130/85',
                'keterangan' => 'Perlu pemantauan lebih lanjut',
                'pasien_id' => 2,
                'dokter_id' => 2,
            ],
            [
                'no' => 3,
                'tanggal' => '2024-03-10',
                'berat' => 72,
                'tinggi' => 175,
                'tensi' => '140/90',
                'keterangan' => 'Perlu tindakan medis',
                'pasien_id' => 3,
                'dokter_id' => 3,
            ],
            [
                'no' => 4,
                'tanggal' => '2024-03-15',
                'berat' => 68.5,
                'tinggi' => 168,
                'tensi' => '125/82',
                'keterangan' => 'Normal',
                'pasien_id' => 4,
                'dokter_id' => 4,
            ],
            [
                'no' => 5,
                'tanggal' => '2024-03-20',
                'berat' => 73,
                'tinggi' => 170,
                'tensi' => '120/80',
                'keterangan' => 'Normal',
                'pasien_id' => 5,
                'dokter_id' => 5,
            ],
        ]);
    }
}