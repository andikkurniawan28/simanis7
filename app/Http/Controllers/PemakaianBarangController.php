<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\PemakaianBarang;
use Illuminate\Http\Request;

class PemakaianBarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pemakaian_barangs = PemakaianBarang::select(["faktur", "tgl", "gudang", "rekdebet", "rekkredit"])->orderBy("tgl", "desc")->limit(5000)->get();
        return view("pemakaian_barang.index", compact("pemakaian_barangs"));
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
        return view("pemakaian_barang.create", compact(
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
        PemakaianBarang::create($request->all());
        return redirect()->route("pemakaian_barang.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PemakaianBarang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(PemakaianBarang $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PemakaianBarang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $pemakaian_barang = PemakaianBarang::where("faktur", $faktur)->get()->last();
        $gudangs = Gudang::all();
        return view("pemakaian_barang.edit", compact(
            "pemakaian_barang",
            "gudangs",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PemakaianBarang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        PemakaianBarang::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("pemakaian_barang.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PemakaianBarang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        PemakaianBarang::where("faktur", $faktur)->delete();
        return redirect()->route("pemakaian_barang.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = PemakaianBarang::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
