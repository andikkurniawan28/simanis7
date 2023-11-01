<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Termin;
use App\Supplier;
use App\OrderPembelian;
use Illuminate\Http\Request;

class OrderPembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_pembelians = OrderPembelian::orderBy("tgl", "desc")->get();
        return view("order_pembelian.index", compact("order_pembelians"));
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
        return view("order_pembelian.create", compact(
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
        OrderPembelian::create($request->all());
        return redirect()->route("order_pembelian.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(OrderPembelian $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $order_pembelian = OrderPembelian::where("faktur", $faktur)->get()->last();
        return view("order_pembelian.edit", compact("order_pembelian"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        OrderPembelian::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("order_pembelian.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderPembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        OrderPembelian::where("faktur", $faktur)->delete();
        return redirect()->route("order_pembelian.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = OrderPembelian::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
        if($faktur_terakhir == NULL){
            $kode = "00";
        } else {
            $kode = substr($faktur_terakhir, 6, 2);
            $kode = (int)$kode + 1;
            if($kode < 10) $kode = "0{$kode}";
        }
        return "PO".date("y").date("m").$kode.date("d");
    }
}
