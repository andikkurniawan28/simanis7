<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Gudang;
use App\OrderPenjualan;
use App\Termin;
use App\Customer;
use App\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualans = Penjualan::orderBy("tgl", "desc")->limit(100)->get();
        return view("penjualan.index", compact("penjualans"));
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
        $order_penjualans = OrderPenjualan::all();
        return view("penjualan.create", compact(
            "customers",
            "termins",
            "stocks",
            "faktur",
            "gudangs",
            "order_penjualans",
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
        Penjualan::create($request->all());
        return redirect()->route("penjualan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Penjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Penjualan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Penjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $penjualan = Penjualan::where("faktur", $faktur)->get()->last();
        $customers = Customer::all();
        $termins = Termin::all();
        $stocks = Stock::where("status", "Y")->orderBy("kode", "asc")->get();
        $gudangs = Gudang::all();
        $order_penjualans = OrderPenjualan::all();
        return view("penjualan.edit", compact(
            "penjualan",
            "customers",
            "termins",
            "stocks",
            "gudangs",
            "order_penjualans",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Penjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        Penjualan::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("penjualan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Penjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        Penjualan::where("faktur", $faktur)->delete();
        return redirect()->route("penjualan.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = Penjualan::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
