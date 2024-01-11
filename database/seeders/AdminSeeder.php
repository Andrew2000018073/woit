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
        'nama' => "Abiema Febrian    Nugraha",
    ],[
        'nama' => "Dimas Hendrick Gerarldi",
    ],[
        'nama' => "Adi Nugroho",
    ],[
        'nama' => "Mas Arif",
    ],[
        'nama' => "Nur Haryanto",
    ]];

    DB::table('admin')->insert($data);

    }
}
