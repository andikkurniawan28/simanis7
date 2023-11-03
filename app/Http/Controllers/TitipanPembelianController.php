<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use App\TitipanPembelian;
use App\KasBank;

class TitipanPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titipan_pembelians = TitipanPembelian::orderBy("faktur", "desc")->get();
        return view("titipan_pembelian.index", compact("titipan_pembelians"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faktur = self::generateFaktur();
        $suppliers = Supplier::all();
        $kas_banks = KasBank::all();
        return view("titipan_pembelian.create", compact(
            "faktur",
            "suppliers",
            "kas_banks",
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
        TitipanPembelian::create($request->all());
        return redirect()->route("titipan_pembelian.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TitipanPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(TitipanPembelian $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TitipanPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $titipan_pembelian = TitipanPembelian::where("faktur", $faktur)->get()->last();
        $suppliers = Supplier::all();
        $kas_banks = KasBank::all();
        return view("titipan_pembelian.edit", compact(
            "titipan_pembelian",
            "suppliers",
            "kas_banks",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TitipanPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        TitipanPembelian::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("titipan_pembelian.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TitipanPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        TitipanPembelian::where("faktur", $faktur)->delete();
        return redirect()->route("titipan_pembelian.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = TitipanPembelian::orderBy("faktur", "desc")->get()->first()->faktur;
        $kode_faktur = substr($faktur_terakhir, 5, 5);
        $kode_faktur = (int)$kode_faktur + 1;
        $nol = "";
        for($i=0; $i<(5 - strlen($kode_faktur)); $i++){
            $nol .= "0";
        }
        $faktur = "TS".date("y")."-".$nol.$kode_faktur;
        return $faktur;
    }
}
