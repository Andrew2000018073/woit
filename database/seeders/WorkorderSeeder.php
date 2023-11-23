<?php

namespace Database\Seeders;

use App\Models\workorder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkorderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        workorder::truncate();
        workorder::create([

            'nama_pic' => fake()->name(),
            'slug' => fake()->name(),
            'nomor_komplain' => fake()->randomNumber(5, false),
            'prioritas' => null,
            'jenis_servis' => null,
            'waktu_pengajuan' => now(),
            'waktu_ambil' => null,
            'waktu_selesai' => null,
            'waktu_estimasi' => null,
            'masalah' => fake()->paragraph(),
            'solusi' => null,
            'status' => 'Belum Dikerjakan',
        ]);
    }
}
