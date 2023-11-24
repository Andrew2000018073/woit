<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DaftarWo extends Controller
{
    //
    public function index()
    {

        $nin = [
            'data' => workorder::get(),
        ];

        return view('main.table.daftar', $nin);
    }
}
