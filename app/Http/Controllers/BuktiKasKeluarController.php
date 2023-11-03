<?php

namespace App\Http\Controllers;

use App\Pot;
use App\BuktiKasKeluar;
use Illuminate\Http\Request;

class BuktiKasKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bukti_kas_keluars = BuktiKasKeluar::select(["faktur", "tgl", "rekening", "total", "uang", "kurs"])->orderBy("tgl", "desc")->limit(1000)->get();
        return view("bukti_kas_keluar.index", compact("bukti_kas_keluars"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faktur = self::generateFaktur();
        $pots = Pot::all();
        return view("bukti_kas_keluar.create", compact(
            "faktur",
            "pots",
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        BuktiKasKeluar::create($request->all());
        return redirect()->route("bukti_kas_keluar.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BuktiKasKeluar  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(BuktiKasKeluar $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BuktiKasKeluar  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $bukti_kas_keluar = BuktiKasKeluar::where("faktur", $faktur)->get()->last();
        $pots = Pot::all();
        return view("bukti_kas_keluar.edit", compact(
            "bukti_kas_keluar",
            "pots",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BuktiKasKeluar  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        BuktiKasKeluar::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("bukti_kas_keluar.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BuktiKasKeluar  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        BuktiKasKeluar::where("faktur", $faktur)->delete();
        return redirect()->route("bukti_kas_keluar.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = BuktiKasKeluar::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
        if($faktur_terakhir == NULL){
            $kode = "00";
        } else {
            $kode = substr($faktur_terakhir, 6, 2);
            $kode = (int)$kode + 1;
            if($kode < 10) $kode = "0{$kode}";
        }
        return "PB".date("y").date("m").$kode.date("d");
    }
}
