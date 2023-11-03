<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use App\TitipanPenjualan;
use App\KasBank;

class TitipanPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titipan_penjualans = TitipanPenjualan::orderBy("faktur", "desc")->get();
        return view("titipan_penjualan.index", compact("titipan_penjualans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faktur = self::generateFaktur();
        $customers = Customer::all();
        $kas_banks = KasBank::all();
        return view("titipan_penjualan.create", compact(
            "faktur",
            "customers",
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
        TitipanPenjualan::create($request->all());
        return redirect()->route("titipan_penjualan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TitipanPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(TitipanPenjualan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TitipanPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $titipan_penjualan = TitipanPenjualan::where("faktur", $faktur)->get()->last();
        $customers = Customer::all();
        $kas_banks = KasBank::all();
        return view("titipan_penjualan.edit", compact(
            "titipan_penjualan",
            "customers",
            "kas_banks",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TitipanPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        TitipanPenjualan::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("titipan_penjualan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TitipanPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        TitipanPenjualan::where("faktur", $faktur)->delete();
        return redirect()->route("titipan_penjualan.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = TitipanPenjualan::orderBy("faktur", "desc")->get()->first()->faktur;
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
