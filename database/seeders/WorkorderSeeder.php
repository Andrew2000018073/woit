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
            'nomor_komplain' => fake()->numberBetween(1, 4),
            'prioritas' => 'menengah',
            'jenis_servis' => 'internal',
            'waktu_pengajuan' => now(),
            'waktu_ambil' => now(),
            'waktu_selesai' => now(),
            'waktu_estimasi' => now(),
            'masalah' => fake()->paragraph(),
            'solusi' => fake()->paragraph(),
            'status' => 'Belum Dikerjakan',
        ]);
    }
}
