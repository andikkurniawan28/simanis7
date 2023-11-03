<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Termin;
use App\Customer;
use App\OrderPenjualan;
use Illuminate\Http\Request;

class OrderPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order_penjualans = OrderPenjualan::index();
        $customers = Customer::select(["kode", "nama"])->get();
        $termins = Termin::select(["kode", "keterangan"])->get();
        $faktur = self::generateFaktur();
        return view("order_penjualan.index", compact(
            "order_penjualans",
            "customers",
            "termins",
            "faktur",
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $customers = Customer::select(["kode", "nama"])->get();
        $termins = Termin::select(["kode", "keterangan"])->get();
        $faktur = self::generateFaktur();
        return view("order_penjualan.create", compact(
            "customers",
            "termins",
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
        OrderPenjualan::create($request->all());
        return redirect()->route("order_penjualan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OrderPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(OrderPenjualan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\OrderPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $order_penjualan = OrderPenjualan::where("faktur", $faktur)->get()->last();
        $customers = Customer::select(["kode", "nama"])->get();
        $termins = Termin::select(["kode", "keterangan"])->get();
        return view("order_penjualan.edit", compact(
            "order_penjualan",
            "customers",
            "termins",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\OrderPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        OrderPenjualan::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("order_penjualan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\OrderPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        OrderPenjualan::where("faktur", $faktur)->delete();
        return redirect()->route("order_penjualan.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = OrderPenjualan::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
        if($faktur_terakhir == NULL){
            $kode = "00";
        } else {
            $kode = substr($faktur_terakhir, 6, 2);
            $kode = (int)$kode + 1;
            if($kode < 10) $kode = "0{$kode}";
        }
        return "SO".date("y").date("m").$kode.date("d");
    }
}
