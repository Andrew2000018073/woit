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
            'unit' => fake()->randomElement(['IT','Manajemen', 'Pengembangan', 'Marketing', 'Manajemen']),
            'kategoriwo_id' => fake()->randomElement([1,2, 3, 4]),
            'admin_id' => '1',
            'slug' => fake()->name(),
            'nomor_komplain' => fake()->randomNumber(5, false),
            'nomor_referensi' => fake()->randomNumber(5, false),
            'prioritas' => fake()->randomElement(['rendah', 'menengah', 'tinggi']),
            'jenis_servis' => fake()->randomElement(['internal', 'external']),
            'waktu_pengajuan' => now(),
            'waktu_ambil' => now(),
            'waktu_selesai' => now(),
            'waktu_estimasi' => now(),
            'keluhan' => fake()->paragraph(),
            'solusi' => fake()->paragraph(),
            'status' => fake()->randomElement(['Belum dikerjakan', 'Sedang dikerjakan', 'Selesai']),
            'perangkat' => fake()->randomElement(['CPU', 'MONITOR', 'MOUSE', 'KEYBOARD', 'JARINGAN', 'SPEAKER', 'PRINTER','LAINNYA']),
        ];
    }
}
