<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\Admin;
use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;


class DaftarWo extends Controller
{
    //
    // public function admin($teng){
    //     $models = Admin::all();
    //     foreach ($models as $model) {
    //         if($model->id == $teng){
    //             return $model->nama;
    //         }
    //     }
    // }

public function kembali($nokomplain ,$admin, $tanggal, $prioritas, $jenisservis, $status, $kategori){
    $key= '';
    if($nokomplain != null){
        $key = $key.' '.' Nomor komplain'.',';
    }
    if($admin != null){
        $key = $key.' '.' Admin'.',';
    }
    if($tanggal != null){
        $key = $key.' '.' Tanggal'.',';
    }
    if($prioritas != null){
        $key = $key.' '. ' Prioritas'.',';
    }
    if($jenisservis != null){
        $key = $key.' '.' Jenis Servis'.',';
    }
    if($status != null){
        $key = $key.' '.' Status'.',';
    }
    if($kategori != null){
        $key = $key.' '.' Kategori'.',';
    }
    $key = 'Filter by' . $key;
    return $key;
}

    public function index(request $request)
    {
        $testo=$this->kembali($request->nokomplain , $request->admin, $request->datetimes, $request->prioritas, $request->jenisservis, $request->status, $request->kategori);
        $data = [
            'data' => workorder::paginate(5)->withQueryString(),
            'kategori' => kategoriwo::get(),
            'admin'=> admin::get(),
            'slug'=> 'daftar',
            'keterangan'=>$testo
        ];
        $tanggal = $request->datetimes;
        // dd($tanggal);




    $data['lastnumber']=$data['data']->perPage()*($data['data']->currentPage()-1);

    if($request->has('datetimes')){

        list($startDateStr, $endDateStr) = explode(" - ", $tanggal);
        $startDate = DateTime::createFromFormat('Y-m-d H:i', $startDateStr);
        $endDate = DateTime::createFromFormat('Y-m-d H:i', $endDateStr);



        $data =['data'=> workorder::whereDate('created_at','>=', $startDate)
        ->whereDate('created_at','<=',$endDate)
        ->where('nomor_komplain','like','%'. request('nokomplain'))
        ->where('admin_id','like','%'. request('admin'))
        ->where('kategoriwo_id','like','%'. request('kategoriwo_id'))
        ->where('status','like','%'. request('status'))
        ->where('jenis_servis','like','%'. request('jenis_servis'))
        ->where('prioritas','like','%'. request('prioritas'))
        ->paginate(5)->withQueryString(),
        'kategori' => kategoriwo::get(),
        'admin'=> admin::get(),
        'slug'=> 'daftar',
        'keterangan'=>$testo ];
        // dd('data')

        $data['lastnumber'] = $data['data']->perPage()*($data['data']->currentPage()-1);
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
