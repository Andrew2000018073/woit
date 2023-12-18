<?php

namespace App\Http\Controllers;

use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\BigInteger;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\Rules\RequiredIf;

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


        return view('main.respon.index', $info);

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
        return view('main.respon.balas',$data);
    }





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     function generatenomorkomplain($kategori, $tanggal, $nomor){
        // $count = DB::table('w')->count();
        $codejenis= "";
        $info = kategoriwo::pluck('singkatan') ;
        $array= $info->toArray();
        for ($x = 0; $x < $kategori; $x++) {
            if ($x == $kategori-1) {
                $codejenis = $array[$x];
                break;
            }
        }

        $codekomplen = 'UIT/CMPLT/'.$codejenis.'/'.$tanggal.'/'.$nomor;
        return $codekomplen;
     }
    public function update(Request $request, $id)
    {
        // buat nomor belakang
        $count = $id;
        if ($count > 0 && $count < 10) {
            $count = '000' . $count;
        } else if ($count < 100) {
            $count = '00' . $count;
        }
        // buat tanggal
        $waktuambil= now()->format('md');
        // buat kategori
        $category=$request->kategoriwo_id;
        $new= (int)$category;
        $testo= $this->generatenomorkomplain($new, $waktuambil, $count );

        $validatedData= $request->validate([
            'analisis'=>'required|min:10',
            'perangkat'=>'required',
            // 'id_perangkat'=>'required|min:10',
            'kategoriwo_id'=>'required',
            'jenis_servis'=>'required',
        ]);
        $validatedData['status'] = 'Sedang dikerjakan';
        $validatedData['waktu_ambil'] = now()->format('Y-m-d H:i:s');
        $validatedData['admin_id'] = Auth::id();
        $validatedData['nomor_komplain'] = $testo;
        if ($request->has('prioritas')){
            $validatedData['prioritas'] = $request->input('prioritas');
            $resource = workorder::findOrFail($id);
            $resource->update($validatedData);
        }
        else {
            # code...
            $validatedData['prioritas'] = 'rendah';
            $resource = workorder::findOrFail($id);
            $resource->update($validatedData);
        }

        // dd($validatedData);

        // $validatedData['nomor_komplain'] = $unit[0].'/'.'CMPLT'.$validatedData['kategoriwo_id'].now();
        // $validatedData['nomor_komplain'] = $unit[0];

        // dd($validatedData['nomor_komplain']);



        // $resource->update([
        //     'analisis'     => $request->analisis
        // ]);

        Alert::info( 'Anda mengambil sebuah permintaan!' , 'Selamat Mengerjakan '.$validatedData['nomor_komplain']);
        return redirect('/tugas');

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
