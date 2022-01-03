<?php

namespace App\Http\Controllers;

use App\Models\Disease;
use App\Models\Symptom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class KonsultasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $pertanyaan_gejala = null;
        $nomor = null;
        $gagal = false;
        $sukses = null;
        $diseases = null;
        if(!session()->has("diseases") or !session()->has("sudah_klik_tombol")) {
            session()->put("nomor", 1);
            // if(session()->has("skip")) {
            //     session()->forget("skip");
            // }
            $disease_symptom = DB::select("select * from disease_symptom");
            $array = array();
            foreach($disease_symptom as $disease ) {
                if(!isset($array[$disease->disease_id])) {
                    $array[$disease->disease_id] = [$disease->symptom_id];
                } else {
                    array_push($array[$disease->disease_id],$disease->symptom_id);
                }
            }
            $diseases = $array;
            
            if(count($diseases) == 0) {
                $gagal = true;
            } else if(count($diseases) == 1) {
                $sukses = $diseases;
            }
            if($gagal != true or $sukses != null) {
            session()->put("diseases",$array);
            $sementara = null;
            foreach($array as $key => $value) {
                $sementara = $value[0];
                break;
            }
            session()->put("skip",[$sementara]);
            $pertanyaan_gejala = DB::select("select * from symptoms where id = ?", [$sementara])[0];


        }
        } else {
            $nomor = session()->get("nomor");
            $nomor++;
            session()->put("nomor",$nomor);
            $diseases = session()->get("diseases");

            if(count($diseases) == 0) {
                $gagal = true;
            } else if(count($diseases) == 1) {
                $id_penyakit_terakhir = null;
                foreach($diseases as $key => $value) {
                    $id_penyakit_terakhir = $key;
                    break;
                }
                $nama_penyakit_terakhir = Disease::find($id_penyakit_terakhir)->nama_penyakit;
                $sukses = $nama_penyakit_terakhir;

            }
            if($gagal != true or $sukses != null) {
                $skip = session()->get("skip");
    
                $sementara = null;
                foreach($diseases as $key => $value) {
                    foreach($value as $v) {
                        if(!in_array($v, $skip)) {
                        $sementara = $v;
                        break;
                        }
                    }
                }
                session()->push("skip",$sementara);
                $pertanyaan_gejala = DB::select("select * from symptoms where id = ?", [$sementara])[0];       
            }

        }

        return view("konsultasi/index",[
            "title" => "Konsultasi Penyakit Dalam",
            "symptom" => $pertanyaan_gejala,
            "nomor" => session()->get("nomor"),
            "gagal" => $gagal,
            "sukses" => $sukses        
            ]
        );

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
        $diseases = session()->get("diseases");
        session()->flash("sudah_klik_tombol", true);
        if($request->has("not_symptom")) {
            foreach($diseases as $key => $value) {
                if(in_array($request->get("not_symptom"),$diseases[$key])) {
                    unset($diseases[$key]);
                }   
            }
        }

        if($request->has("symptom")) {
            foreach($diseases as $key => $value) {
                if(!in_array($request->get("symptom"),$diseases[$key])) {
                    unset($diseases[$key]);
                }   
            }
        }

        session()->put("diseases", $diseases);
        return redirect("/konsultasi");
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