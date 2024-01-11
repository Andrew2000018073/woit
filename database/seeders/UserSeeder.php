<?php

namespace Database\Seeders;

use App\Models\user;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        user::truncate();
        user::create([
            'nama'=> 'admin',
            'username' => 'admin',
            'password' => bcrypt('password')

        ]);
    }
}
