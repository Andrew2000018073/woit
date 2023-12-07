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
            'singkatan' => 'AST',
            'keterangan' => fake()->sentence(10),
        ], [
            'nama_kategori' => 'Jaringan',
            'singkatan' => 'JRG',
            'keterangan' => fake()->sentence(8),
        ], [
            'nama_kategori' => 'Pemeliharaan Software',
            'singkatan' => 'SFT',
            'keterangan' => fake()->sentence(15),
        ], [
            'nama_kategori' => 'Konfigurasi Sistem',
            'singkatan' => 'KSM',
            'keterangan' => fake()->sentence(15),
        ]];

        DB::table('kategoriwos')->insert($data);
    }
}
