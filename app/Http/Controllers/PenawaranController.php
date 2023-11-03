<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Gudang;
use App\Termin;
use App\Customer;
use App\Penawaran;
use Illuminate\Http\Request;

class PenawaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penawarans = Penawaran::orderBy("tgl", "desc")->limit(100)->get();
        return view("penawaran.index", compact("penawarans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::all();
        $termins = Termin::all();
        $stocks = Stock::where("status", "Y")->orderBy("kode", "asc")->get();
        $faktur = self::generateFaktur();
        $gudangs = Gudang::all();
        return view("penawaran.create", compact(
            "customers",
            "termins",
            "stocks",
            "faktur",
            "gudangs",
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
        Penawaran::create($request->all());
        return redirect()->route("penawaran.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penawaran  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Penawaran $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penawaran  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $penawaran = Penawaran::where("faktur", $faktur)->get()->last();
        $customers = Customer::all();
        $termins = Termin::all();
        $stocks = Stock::where("status", "Y")->orderBy("kode", "asc")->get();
        $gudangs = Gudang::all();
        return view("penawaran.edit", compact(
            "penawaran",
            "customers",
            "termins",
            "stocks",
            "gudangs",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penawaran  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        Penawaran::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("penawaran.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penawaran  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        Penawaran::where("faktur", $faktur)->delete();
        return redirect()->route("penawaran.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = Penawaran::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
