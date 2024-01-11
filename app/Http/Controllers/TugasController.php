<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    //

    public function kembali($nokomplain , $tanggal, $prioritas, $kategori){
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
        $key = 'Filter by' . $key;
        return $key;
    }

    public function index(request $request){

        $testo=$this->kembali($request->nokomplain , $request->datetimes, $request->prioritas, $request->kategori);

        $data = [
            'data' => workorder::where('admin_id', Auth::id())->where('status', 'Sedang Dikerjakan')->paginate(5),
            'keterangan'=> 'Filter by',
            'slug'=> 'tugas',
            'kategori' => kategoriwo::get()
        ];

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
        ->where('status','like','%'. request('status'))
        ->where('jenis_servis','like','%'. request('jenis_servis'))
        ->where('prioritas','like','%'. request('prioritas'))
        ->where('admin_id', Auth::id())
        ->where('status', 'Sedang Dikerjakan')
        ->paginate(5)->withQueryString(),
        'kategori' => kategoriwo::get(),
        'slug'=> 'tugas',
        'keterangan'=>$testo ];
        $data['lastnumber'] = $data['data']->perPage()*($data['data']->currentPage()-1);
        return view('main.tugas.index', $data);
    }else{

        return view('main.tugas.index', $data);
    }

    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = [
            'workorder'=>workorder::where('id', $id)->first(),
            'slug'=> 'tugas',
            'kategori' => kategoriwo::get(),
        ];
        //
        return view('main.tugas.edit',$data);
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $unit = DB::table('workorders')->where('id', $id)->select('unit')->get();


        $validatedData= $request->validate([
            'solusi'=>'required|min:5',
        ]);
        $validatedData['status'] = 'Selesai';
        $validatedData['waktu_ambil'] = now();
        $validatedData['admin_id'] = Auth::id();
        $resource = workorder::findOrFail($id);

        $resource->update($validatedData);



        // dd($validatedData);

        // $validatedData['nomor_komplain'] = $unit[0].'/'.'CMPLT'.$validatedData['kategoriwo_id'].now();
        // $validatedData['nomor_komplain'] = $unit[0];

        // dd($validatedData['nomor_komplain']);



        // $resource->update([
        //     'analisis'     => $request->analisis
        // ]);

        Alert::success('Selamat!', 'Anda telah menyelesaikan permintaan');
        return redirect('/selesai');

    }

}
