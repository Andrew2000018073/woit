<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


    $data = [[
        'nama' => "Andrew",
        'username' => 'andrew',
        'password' => bcrypt('password'),
    ],[
        'nama' => "Alfi",
        'username' => 'alfi',
        'password' => bcrypt('password'),
    ]];

    DB::table('admin')->insert($data);

    }
}
