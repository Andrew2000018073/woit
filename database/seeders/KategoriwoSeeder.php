<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KategoriwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        $data = [[
            'nama_kategori' => 'Aset',
            'slug' => 'aset',
            'keterangan' => fake()->sentence(10),
        ], [
            'nama_kategori' => 'Jaringan',
            'slug' => 'jaringan',
            'keterangan' => fake()->sentence(8),
        ], [
            'nama_kategori' => 'Pemeliharaan Software',
            'slug' => 'pemelirahaan-software',
            'keterangan' => fake()->sentence(15),
        ], [
            'nama_kategori' => 'Konfigurasi Sistem',
            'slug' => 'konfigurasi-sistem',
            'keterangan' => fake()->sentence(15),
        ]];

        DB::table('kategoriwos')->insert($data);
    }
}
