<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;




class SelesaiController extends Controller
{
    //

    public function kembali($nokomplain , $tanggal, $prioritas, $kategori, $unit){
        $key= '';
        if($nokomplain != null){
            $key = $key.' '.' Nomor komplain'.',';
        }
        if($tanggal != null){
            $key = $key.' '.' Tanggal'.',';
        }
        if($prioritas != null){
            $key = $key.' '. ' Prioritas'.',';
        }
        if($kategori != null){
            $key = $key.' '.' Kategori'.',';
        }
        if($unit != null){
            $key = $key.' '.' Unit'.',';
        }
        $key = 'Filter by' . $key;
        return $key;
    }

    public function index(Request $request){
        $data = [
            'data' => workorder::where('admin_id', Auth::id())->where('status', 'Selesai')->paginate(5),
            'keterangan'=> 'Filter by',
            'slug'=> 'selesai',
            'kategori' => kategoriwo::get()
        ];

        $testo=$this->kembali($request->nokomplain , $request->datetimes, $request->prioritas, $request->kategori, $request->unit);

        $data['lastnumber']=$data['data']->perPage()*($data['data']->currentPage()-1);
        $tanggal = $request->datetimes;

    if($request->has('datetimes')){

        list($startDateStr, $endDateStr) = explode(" - ", $tanggal);
        $startDate = DateTime::createFromFormat('Y-m-d H:i', $startDateStr);
        $endDate = DateTime::createFromFormat('Y-m-d H:i', $endDateStr);


        $data =['data'=> workorder::whereDate('created_at','>=', $startDate)
        ->whereDate('created_at','<=',$endDate)
        ->where('nomor_komplain','like','%'. request('nokomplain'))
        ->where('admin_id','like','%'. request('admin'))
        ->where('kategoriwo_id','like','%'. request('kategoriwo_id'))
        ->where('jenis_servis','like','%'. request('jenis_servis'))
        ->where('prioritas','like','%'. request('prioritas'))
        ->where('admin_id', Auth::id())
        ->where('status', 'Selesai')
        ->paginate(5)->withQueryString(),
        'kategori' => kategoriwo::get(),
        'keterangan'=>$testo ];
        $data['lastnumber'] = $data['data']->perPage()*($data['data']->currentPage()-1);
        return view('main.selesai.index', $data);
    }else{

        return view('main.selesai.index', $data);
    }
        // $data = ['data' => DB::table('workorders')->where('admin_id', Auth::id())->get()];
        // return view("main.selesai.index", $data);
    }
}
