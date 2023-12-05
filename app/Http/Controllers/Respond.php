<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Respond extends Controller
{
    public function index()
    {
        // $data = ['data' => workorder::get()];

        $info = ['info' => DB::table('workorders')->where('status', 'Belum dikerjakan')->get()];
        return view('main.respon.index', $info, [
            'data'=>$id = Auth::user()
        ]);
    }

    public function respon(){
        return view('main.respon.respon',['data'=>$id = Auth::user()]);

    }
}
