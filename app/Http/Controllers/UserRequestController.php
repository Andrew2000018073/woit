<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;


class UserRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('user.progress', ['slug'=>'cek']);

    }
    public function detail(Request $request)
    {
        $nomor = $request->nokomplain;

        // $data =[ 'data'=>workorder::where('nomor_komplain','like','%'. $request->nokomplain)
        // ->orwhere('nomor_referensi','like','%'. $request->nokomplain)->first()];
        // dd($data);
        $data  = workorder::where('nomor_komplain','like','%'. $request->nokomplain)->orwhere('nomor_referensi','like','%'. $request->nokomplain)->first();

        // dd($status);
        if($data != null){
            if($data->status == 'Selesai'){
                return view('user.selesai',['data' => $data,
                'slug'=>'cek']);
            }
            elseif($data->status == 'Sedang dikerjakan'){
                return view('user.dikerjakan',['data' => $data,
                'slug'=>'cek']);
            }
            elseif($data->status == 'Belum dikerjakan'){
                return view('user.menunggu', ['data'=>$data,
                'slug'=>'cek']);
            }

        }
        else{
            return view('user.notfound', ['slug'=>'cek']);
        }
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function rating(){
        return view('user.rating', ['slug'=>'rate']);
    }
    public function cekid(Request $request){
        // dd('ter');
        // dd($request);
        $data  = workorder::where('nomor_komplain','like','%'. $request->nokomplain)->orwhere('nomor_referensi','like','%'. $request->nokomplain)->first();
        if($data->status == 'Selesai'){
            return redirect('/user/permintaan/'.$request->nokomplain.'/edit');
        }
        elseif($data->status == 'Sedang dikerjakan'){
            return view('user.dikerjakan',['data' => $data,
            'slug'=>'rate']);
        }
        elseif($data->status == 'Belum dikerjakan'){
            return view('user.menunggu', ['data'=>$data,
            'slug'=>'rate']);
        }
            else{
        return view('user.notfound', ['slug'=>'rate']);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.request', [
            'slug'=>'minta'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //validate form
        $validatedData= $request->validate([
            'user'     => 'required|min:4',
            'unit'     => 'required',
            'keluhan'   => 'required|min:10',
            'perangkat'=>'required'
        ]);

        $validatedData['nomor_referensi'] = fake()->randomNumber(5, false);
        $validatedData['status'] = 'Belum dikerjakan';
        $validatedData['waktu_pengajuan'] = now();
        $validatedData['admin_id'] = null;

        workorder::create($validatedData);

        // redirect to index
        return redirect('/user/cek-proses')->with('success', 'Permintaan anda berhasil diajukan. Berikut adalah nomor referensi anda '.$validatedData['nomor_referensi']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=[
            'slug'=>'rate',
            'id'=> $id,
            'admin'=>workorder::where('nomor_komplain','like','%'. $id)->first()
        ];
        // dd($id);
        return view('user.nilai', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($nomor_komplain, Request $request)
    {
        //
        // dd($request);
        $validatedData= $request->validate([
            'rating'=>'required',
        ]);

        $data  = workorder::where('nomor_komplain','like','%'. $nomor_komplain)->first();
        // dd($data['id']);

        $resource = workorder::findOrFail($data['id']);
        // dd($nomor_komplain);
        $resource->update($validatedData);
        return redirect('/user/rate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
