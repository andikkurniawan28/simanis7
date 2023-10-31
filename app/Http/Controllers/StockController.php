<?php

namespace App\Http\Controllers;

use App\Pot;
use App\Stock;
use App\Satuan;
use App\Golongan;
use App\SubGolongan;
use Illuminate\Http\Request;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route("stock_aktif", "Y");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pots = Pot::all();
        $golongans = Golongan::all();
        $sub_golongans = SubGolongan::all();
        $satuans = Satuan::all();
        return view("stock.create", compact(
            "pots",
            "golongans",
            "sub_golongans",
            "satuans",
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
        Stock::create($request->all());
        return redirect()->route("stock.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stock  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stock  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $pots = Pot::all();
        $golongans = Golongan::all();
        $sub_golongans = SubGolongan::all();
        $satuans = Satuan::all();
        $stock = Stock::where("kode", $kode)->get()->last();
        return view("stock.edit", compact(
            "stock",
            "pots",
            "golongans",
            "sub_golongans",
            "satuans",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stock  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        Stock::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("stock.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stock  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        Stock::where("kode", $kode)->delete();
        return redirect()->route("stock.index")->with("success", "Data berhasil dihapus");
    }
}
