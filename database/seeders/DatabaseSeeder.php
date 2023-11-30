<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\workorder;
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
    workorder::factory(10)->create();
    Admin::factory(10)->create();

        $this->call(AdminSeeder::class);
        Admin::factory()->create([
            'nama' => "Andrew",
            'username' => 'andrew',
            'password' => bcrypt('password'),
        ]);
    }
}
