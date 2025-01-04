<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Memanggil seeder lain
        $this->call([
            UserSeeder::class,      // Memanggil UserSeeder
            JadwalSeeder::class,    // Memanggil JadwalSeeder
            LaporanSeeder::class,   // Memanggil LaporanSeeder
        ]);
    }
}
