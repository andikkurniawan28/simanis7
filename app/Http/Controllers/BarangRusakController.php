<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\BarangRusak;
use Illuminate\Http\Request;

class BarangRusakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang_rusaks = BarangRusak::select(["faktur", "tgl", "gudang"])->orderBy("tgl", "desc")->limit(5000)->get();
        return view("barang_rusak.index", compact("barang_rusaks"));
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
        return view("barang_rusak.create", compact(
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
        BarangRusak::create($request->all());
        return redirect()->route("barang_rusak.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BarangRusak  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(BarangRusak $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BarangRusak  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $barang_rusak = BarangRusak::where("faktur", $faktur)->get()->last();
        $gudangs = Gudang::all();
        return view("barang_rusak.edit", compact(
            "barang_rusak",
            "gudangs",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BarangRusak  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        BarangRusak::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("barang_rusak.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BarangRusak  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        BarangRusak::where("faktur", $faktur)->delete();
        return redirect()->route("barang_rusak.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = BarangRusak::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
