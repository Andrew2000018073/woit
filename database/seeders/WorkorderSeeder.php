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
            'waktu_pengajuan' => now()->format('YYYY-MM-DD H:i'),
            'waktu_ambil' => now()->format('YYYY-MM-DD H:i'),
            'waktu_selesai' => now()->format('YYYY-MM-DD H:i'),
            'waktu_estimasi' => now()->format('YYYY-MM-DD H:i'),
            'masalah' => fake()->paragraph(),
            'solusi' => fake()->paragraph(),
            'status' => 'Belum Dikerjakan',
        ]);
    }
}
