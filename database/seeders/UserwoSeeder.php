<?php

namespace Database\Seeders;

use App\Models\userwo;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserwoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        userwo::truncate();
        userwo::create([
            'nama' => "Andrew",
            'username' => 'andrew',
            'password' => bcrypt('password'),
        ]);
    }
}
