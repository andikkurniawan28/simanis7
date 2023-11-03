<?php

namespace App\Http\Controllers;

use App\Gudang;
use App\MutasiBarangAntarGudang;
use Illuminate\Http\Request;

class MutasiBarangAntarGudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mutasi_barang_antar_gudangs = MutasiBarangAntarGudang::select(["faktur", "tgl", "asli", "dari", "ke"])->orderBy("tgl", "desc")->limit(5000)->get();
        return view("mutasi_barang_antar_gudang.index", compact("mutasi_barang_antar_gudangs"));
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
        return view("mutasi_barang_antar_gudang.create", compact(
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
        MutasiBarangAntarGudang::create($request->all());
        return redirect()->route("mutasi_barang_antar_gudang.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MutasiBarangAntarGudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(MutasiBarangAntarGudang $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MutasiBarangAntarGudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $mutasi_barang_antar_gudang = MutasiBarangAntarGudang::where("faktur", $faktur)->get()->last();
        $gudangs = Gudang::all();
        return view("mutasi_barang_antar_gudang.edit", compact(
            "mutasi_barang_antar_gudang",
            "gudangs",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MutasiBarangAntarGudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        MutasiBarangAntarGudang::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("mutasi_barang_antar_gudang.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MutasiBarangAntarGudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        MutasiBarangAntarGudang::where("faktur", $faktur)->delete();
        return redirect()->route("mutasi_barang_antar_gudang.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = MutasiBarangAntarGudang::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
