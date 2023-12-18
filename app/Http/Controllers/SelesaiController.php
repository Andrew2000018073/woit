<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SelesaiController extends Controller
{
    //
    public function index(){
        $data = [
            'data' => workorder::where('admin_id', Auth::id())->where('status', 'Selesai')->paginate(5),
        ];

        if (request('status')) {
            $data = [
                'data' =>  workorder::where('status','like','%'. request('status') .'%')
                ->orwhere('nomor_komplain','like','%'. request('status'))
                ->orwhere('durasi','like','%'. request('status'))
                ->paginate(5)->withQueryString()
            ];
        }

        $data['lastnumber']=$data['data']->perPage()*($data['data']->currentPage()-1);

        // $data = ['data' => DB::table('workorders')->where('admin_id', Auth::id())->get()];
        return view("main.tugas.index", $data);
    }
}
