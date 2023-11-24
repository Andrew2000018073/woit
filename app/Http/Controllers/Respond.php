<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Respond extends Controller
{
    public function index()
    {
        // $data = ['data' => workorder::get()];

        $data = ['data' => DB::table('workorders')->where('status', 'Belum dikerjakan')->get()];
        return view('main.table.respon', $data);
    }
}
