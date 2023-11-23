<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use Illuminate\Http\Request;

class Respond extends Controller
{
    public function index()
    {
        $data = ['data' => workorder::get()];

        return view('main.table.respon', $data);
    }
}
