<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Termin;
use App\Supplier;
use App\ReturPembelian;
use Illuminate\Http\Request;

class ReturPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retur_pembelians = ReturPembelian::orderBy("tgl", "desc")->get();
        return view("retur_pembelian.index", compact("retur_pembelians"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $suppliers = Supplier::all();
        $termins = Termin::all();
        $stocks = Stock::where("status", "Y")->orderBy("kode", "asc")->get();
        $faktur = self::generateFaktur();
        return view("retur_pembelian.create", compact(
            "suppliers",
            "termins",
            "stocks",
            "faktur",
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
        ReturPembelian::create($request->all());
        return redirect()->route("retur_pembelian.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ReturPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(ReturPembelian $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ReturPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $retur_pembelian = ReturPembelian::where("faktur", $faktur)->get()->last();
        return view("retur_pembelian.edit", compact("retur_pembelian"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ReturPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        ReturPembelian::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("retur_pembelian.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ReturPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        ReturPembelian::where("faktur", $faktur)->delete();
        return redirect()->route("retur_pembelian.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = ReturPembelian::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
        if($faktur_terakhir == NULL){
            $kode = "00";
        } else {
            $kode = substr($faktur_terakhir, 6, 2);
            $kode = (int)$kode + 1;
            if($kode < 10) $kode = "0{$kode}";
        }
        return "RB".date("y").date("m").$kode.date("d");
    }
}
