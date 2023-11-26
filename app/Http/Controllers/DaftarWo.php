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


        $filter = [
            'filter' => workorder::get(),

        ];





        // $filter->$router->when('admin/*', 'admin', ['post'])

        return view('main.table.daftar', $filter);
    }
    public function store(Request $request){
        $filter = workorder::query();
        $filter->when($request->status, function ($query) use ($request){
            return $query->where('status', $request->status);
        });
        return view('main.table.daftar', $filter);
    }
}
