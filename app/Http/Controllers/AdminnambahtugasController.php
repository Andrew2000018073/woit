<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AdminnambahtugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data = [
            'workorder'=>workorder::get(),
            'slug'=>'tambah',
            'kategori' => kategoriwo::get(),
            'admin' => Admin::get(),
        ];
        return view('main.form.adminnambah', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
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

    public function store(Request $request)
    {
        //
        // dd($request);
        $validatedData = $request->validate([
            'user' => 'required',
            'unit' => 'required',
            'keluhan' => 'required',
            'perangkat' => 'required',
            // 'id_perangkat' => 'required',
            'kategoriwo_id' => 'required',
            'jenis_servis' => 'required',
        ]);

        if ($request->status == "Selesai") {
            $additionalValidation = $request->validate([
                'waktu_ambil' => 'required',
                'waktu_selesai' => 'required',
                'analisis' => 'required',
                'solusi' => 'required',
            ]);

            $validatedData = array_merge($validatedData, $additionalValidation);
        } elseif ($request->status == "Sedang dikerjakan") {
            $count = workorder::latest()->value('id')+1;
            if ($count > 0 && $count < 10) {
            $count = '000' . $count;
                } else if ($count < 100) {
                    $count = '00' . $count;
                 }
            $category=$request->kategoriwo_id;
            $new= (int)$category;
            $waktuambil= now()->format('md');
            $testo = $this->generatenomorkomplain($new, $waktuambil, $count);
            // dd($testo);
            $validatedData['status'] = $request->status;
            $validatedData['keterangan'] = $testo;
        } elseif ($request->status == "Belum dikerjakan") {
            $validatedData['status'] = 'Belum dikerjakan';
        }

        $validatedData['nomor_referensi'] = fake()->randomNumber(5, false);
        $validatedData['waktu_pengajuan'] = now();
        $validatedData['admin_id'] = null;






        // dd($validatedData);

        workorder::create($validatedData);
        Alert::info( 'Workorder telah berhasil ditambahkan');
        return redirect('/dashboard');
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
