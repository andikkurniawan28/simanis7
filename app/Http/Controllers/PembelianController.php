<?php

namespace App\Http\Controllers;

use App\Stock;
use App\Gudang;
use App\OrderPembelian;
use App\Termin;
use App\Supplier;
use App\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembelians = Pembelian::leftjoin("termin", "totpc.termin", "termin.kode")
            ->leftjoin("gudang", "totpc.gudang", "gudang.kode")
            ->leftjoin("supplier", "totpc.kodesc", "supplier.kode")
            ->select(["totpc.*", "termin.keterangan as nama_termin", "supplier.nama as nama_supplier", "gudang.keterangan as nama_gudang"])
            ->orderBy("tgl", "desc")
            ->get();
        return view("pembelian.index", compact("pembelians"));
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
        $gudangs = Gudang::all();
        $order_pembelians = OrderPembelian::all();
        return view("pembelian.create", compact(
            "suppliers",
            "termins",
            "stocks",
            "faktur",
            "gudangs",
            "order_pembelians",
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
        Pembelian::create($request->all());
        return redirect()->route("pembelian.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Pembelian $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $pembelian = Pembelian::where("faktur", $faktur)->get()->last();
        $suppliers = Supplier::all();
        $termins = Termin::all();
        $stocks = Stock::where("status", "Y")->orderBy("kode", "asc")->get();
        $gudangs = Gudang::all();
        $order_pembelians = OrderPembelian::all();
        return view("pembelian.edit", compact(
            "pembelian",
            "suppliers",
            "termins",
            "stocks",
            "gudangs",
            "order_pembelians",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        Pembelian::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("pembelian.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pembelian  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        Pembelian::where("faktur", $faktur)->delete();
        return redirect()->route("pembelian.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = Pembelian::where("tgl", date("Y-m-d"))->get()->last()->faktur ?? NULL;
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
