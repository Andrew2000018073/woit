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
            'user' => fake()->name(),
            'unit' => fake()->state(),
            'kategoriwo_id' => fake()->randomDigitNot(0, 5, 6, 7, 8, 9),
            'admin_id' => '1',
            'slug' => fake()->name(),
            'nomor_komplain' => fake()->randomNumber(5, false),
            'nomor_referensi' => fake()->randomNumber(5, false),
            'prioritas' => 'menengah',
            'jenis_servis' => 'internal',
            'waktu_pengajuan' => now(),
            'waktu_ambil' => now(),
            'waktu_selesai' => now(),
            'waktu_estimasi' => now(),
            'keluhan' => fake()->paragraph(),
            'solusi' => fake()->paragraph(),
            'status' => 'Belum Dikerjakan',
            'perangkat' => 'LAINNYA',
        ];
    }
}
