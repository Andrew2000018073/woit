<?php

namespace App\Http\Controllers;

use DateTime;
use App\Models\workorder;
use App\Models\kategoriwo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

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

     public function kembali($nomor, $pic, $unit, $tanggal){
        $key= '';
        if($nomor != null){
            $key = 'Nomor referensi'.',';
        }
        if($pic != null){
            $key = $key.'Nama pic'.',';
        }
        if($unit != null){
            $key = $key. 'unit'.',';
        }
        if($tanggal != null){
            $key = $key.'tanggal'.',';
        }
        // dd($key);
        return $key;
    }

    public function index(request $request)
    {
        //
        $testo=$this->kembali($request->nomor_referensi , $request->pic, $request->unit, $request->datetimes);


        $data = ['data' => workorder::where('status', 'Belum dikerjakan')
        ->paginate(10),
        'keterangan'=> 'Filter by',
        'slug'=> 'respon',
        ];
        $data['lastnumber']=$data['data']->perPage()*($data['data']->currentPage()-1);
        $tanggal = $request->datetimes;
        // dd($tanggal);

        if($request->has('datetimes')){
            list($startDateStr, $endDateStr) = explode(" - ", $tanggal);
            // dd($startDateStr);

            $startDate = DateTime::createFromFormat('Y-m-d H:i', $startDateStr);
            $endDate = DateTime::createFromFormat('Y-m-d H:i', $endDateStr);
            // dd($startDate);


            $data =['data'=>workorder::whereDate('created_at','>=', $startDate)
            ->whereDate('created_at','<=',$endDate)
            ->where('nomor_komplain','like','%'. request('nomor_referensi'))
            ->where('nomor_referensi','like','%'. request('nomor_referensi'))
            ->where('user','like','%'. request('pic'))
            ->where('unit','like','%'. request('unit'))
            ->paginate(5)->withQueryString(),
            'kategori' => kategoriwo::get(),
            'slug'=> 'respon',
            'keterangan'=>$testo ];
            $data['lastnumber'] = $data['data']->perPage()*($data['data']->currentPage()-1);
            // dd($data);
            return view('main.respon.index', $data);
        }else{
            return view('main.respon.index', $data);
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
            'slug'=> 'respon',
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
        // dd($request);
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
        if ($request->jenis_servis == 'internal'){
            $validatedData['prioritas'] = $request->input('prioritas');
        }
        else {
            # code...
            $validatedData['prioritas'] = 'rendah';
        }
        $resource = workorder::findOrFail($id);
        $resource->update($validatedData);

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
