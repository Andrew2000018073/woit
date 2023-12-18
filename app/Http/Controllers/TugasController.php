<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class TugasController extends Controller
{
    //

    public function index(){
        $data = [
            'data' => workorder::where('admin_id', Auth::id())->where('status', 'Sedang Dikerjakan')->paginate(5),
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
        return redirect('/selesai')->with('success', 'Resource updated successfully');

    }

}
