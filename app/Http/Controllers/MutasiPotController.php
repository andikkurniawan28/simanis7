<?php

namespace App\Http\Controllers;

use App\Pot;
use App\MutasiPot;
use Illuminate\Http\Request;

class MutasiPotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasi_pots = MutasiPot::select(["faktur", "tgl", "gudang"])->orderBy("tgl", "desc")->limit(5000)->get();
        return view("mutasi_pot.index", compact("mutasi_pots"));
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
        return view("mutasi_pot.create", compact(
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
        MutasiPot::create($request->all());
        return redirect()->route("mutasi_pot.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MutasiPot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(MutasiPot $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MutasiPot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $mutasi_pot = MutasiPot::where("faktur", $faktur)->get()->last();
        $pots = Pot::all();
        return view("mutasi_pot.edit", compact(
            "mutasi_pot",
            "pots",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MutasiPot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        MutasiPot::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("mutasi_pot.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MutasiPot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        MutasiPot::where("faktur", $faktur)->delete();
        return redirect()->route("mutasi_pot.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = MutasiPot::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
