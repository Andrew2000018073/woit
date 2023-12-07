<?php

namespace App\Http\Controllers;

use App\Models\kategoriwo;
use App\Models\workorder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RespondController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $info = ['info' => DB::table('workorders')->where('status', 'Belum dikerjakan')->get()];
        return view('main.respon.index', $info, [
            'nama'=>$id = Auth::user()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = [
            'workorder'=>workorder::where('id', $id)->first(),
            'kategori' => kategoriwo::get(),

        ];
        //
        return view('main.respon.balas.index',$data);
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
            'analisis'=>'required|min:5',
            'perangkat'=>'required',
            // 'id_perangkat'=>'required|min:10',
            'kategoriwo_id'=>'required',
            'jenis_servis'=>'required',
            'prioritas'=>'required',

        ]);

        // dd($validatedData);
        $validatedData['status'] = 'Sedang dikerjakan';
        $validatedData['waktu_ambil'] = now();
        $validatedData['admin_id'] = Auth::id();
        // $validatedData['nomor_komplain'] = $unit[0].'/'.'CMPLT'.$validatedData['kategoriwo_id'].now();
        $validatedData['nomor_komplain'] = $unit[0];

        // dd($validatedData['nomor_komplain']);

        $resource = workorder::findOrFail($id);
        $resource->update($validatedData);

        // $resource->update([
        //     'analisis'     => $request->analisis
        // ]);

        return redirect('/dashboard')->with('success', 'Resource updated successfully');

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
