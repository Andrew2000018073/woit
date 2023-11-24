<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\workorder::factory(10)->create();
        \App\Models\userwo::factory(10)->create();

        $this->call(UserwoSeeder::class);
        \App\Models\User::factory()->create([
            'nama' => "Andrew",
            'username' => 'andrew',
            'password' => bcrypt('password'),
        ]);
    }
}
