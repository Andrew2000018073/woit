<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Admin;
use App\Models\workorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;


class DaftarWo extends Controller
{
    //
    public function index(request $request)
    {
// dd($request->all());
        $data = [
            'data' => workorder::paginate(5)->withQueryString(),
        ];
        $tanggal = $request->datetimes;




    $data['lastnumber']=$data['data']->perPage()*($data['data']->currentPage()-1);

    if($request->has('datetimes')){
        list($startDateStr, $endDateStr) = explode(" - ", $tanggal);
        $startDate = DateTime::createFromFormat('m/d h:i A', $startDateStr);
        // dd($startDate);
        $endDate = DateTime::createFromFormat('m/d h:i A', $endDateStr);

        // dd($startDateStr, $endDateStr);

        $data =['data'=> workorder::whereDate('created_at','>=', $startDate)
        ->whereDate('created_at','<=',$endDate)
        ->where('nomor_komplain','like','%'. request('nokomplain'))
        ->where('status','like','%'. request('status'))
        ->where('jenis_servis','like','%'. request('jenis_servis'))
        ->where('prioritas','like','%'. request('prioritas'))
        ->paginate(5)->withQueryString() ];
        $data['lastnumber'] = $data['data']->perPage()*($data['data']->currentPage()-1);
        // dd($data);
        return view('main.table.daftar', $data);
    }else{

        return view('main.table.daftar', $data);
    }

    }
    // public function store(Request $request){
    //     $filter = workorder::query();
    //     $filter->when($request->status, function ($query) use ($request){
    //         return $query->where('status', $request->status);
    //     });
    //     return view('main.table.daftar', $filter);
    // }
}
