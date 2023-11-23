<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\work_order>
 */
class WorkOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
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
            'status' => 'Sedang dikerjakan'
        ];
    }
}
