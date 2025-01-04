<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('jadwals')->insert([
            [
                'nama' => 'Alwi',
                'hari' => 'Senin',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'Salam',
                'hari' => 'Senin',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'raja',
                'hari' => 'Senin',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'Davin',
                'hari' => 'Selasa',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'Ican',
                'hari' => 'Selasa',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'malik',
                'hari' => 'Selasa',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'Ammar',
                'hari' => 'Rabu',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'Ojan',
                'hari' => 'Rabu',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'pebri',
                'hari' => 'Rabu',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'dmong',
                'hari' => 'Kamis',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'giyas',
                'hari' => 'Kamis',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'ayuy',
                'hari' => 'Kamis',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'agung',
                'hari' => 'Jumat',
                'waktu' => '01.00 - 23.00',
            ],
            [
                'nama' => 'zidan',
                'hari' => 'Jumat',
                'waktu' => '01.00 - 23.00',
            ],
        ]);
        
    }
}
