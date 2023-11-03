<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\BarangMati;
use Illuminate\Http\Request;

class BarangMatiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_matis = BarangMati::select(["faktur", "tgl", "gudang"])->orderBy("tgl", "desc")->limit(5000)->get();
        return view("barang_mati.index", compact("barang_matis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faktur = self::generateFaktur();
        $gudangs = Gudang::all();
        return view("barang_mati.create", compact(
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
        BarangMati::create($request->all());
        return redirect()->route("barang_mati.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangMati  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(BarangMati $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangMati  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $barang_mati = BarangMati::where("faktur", $faktur)->get()->last();
        $gudangs = Gudang::all();
        return view("barang_mati.edit", compact(
            "barang_mati",
            "gudangs",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangMati  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        BarangMati::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("barang_mati.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangMati  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        BarangMati::where("faktur", $faktur)->delete();
        return redirect()->route("barang_mati.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = BarangMati::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
