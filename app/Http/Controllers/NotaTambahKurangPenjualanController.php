<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use App\NotaTambahKurangPenjualan;
use App\RekeningAkuntansi;

class NotaTambahKurangPenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nota_tambah_kurang_penjualans = NotaTambahKurangPenjualan::orderBy("faktur", "desc")->get();
        return view("nota_tambah_kurang_penjualan.index", compact("nota_tambah_kurang_penjualans"));
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
        $rekening_akuntansis = RekeningAkuntansi::all();
        return view("nota_tambah_kurang_penjualan.create", compact(
            "faktur",
            "suppliers",
            "rekening_akuntansis",
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
        NotaTambahKurangPenjualan::create($request->all());
        return redirect()->route("nota_tambah_kurang_penjualan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\NotaTambahKurangPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(NotaTambahKurangPenjualan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NotaTambahKurangPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($faktur)
    {
        $nota_tambah_kurang_penjualan = NotaTambahKurangPenjualan::where("faktur", $faktur)->get()->last();
        $suppliers = Supplier::all();
        $rekening_akuntansis = RekeningAkuntansi::all();
        return view("nota_tambah_kurang_penjualan.edit", compact(
            "nota_tambah_kurang_penjualan",
            "suppliers",
            "rekening_akuntansis",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NotaTambahKurangPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $faktur)
    {
        NotaTambahKurangPenjualan::where("faktur", $faktur)->update($request->except(["_token", "_method"]));
        return redirect()->route("nota_tambah_kurang_penjualan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\NotaTambahKurangPenjualan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($faktur)
    {
        NotaTambahKurangPenjualan::where("faktur", $faktur)->delete();
        return redirect()->route("nota_tambah_kurang_penjualan.index")->with("success", "Data berhasil dihapus");
    }

    public static function generateFaktur(){
        $faktur_terakhir = NotaTambahKurangPenjualan::orderBy("faktur", "desc")->get()->first()->faktur;
        $kode_faktur = substr($faktur_terakhir, 5, 5);
        $kode_faktur = (int)$kode_faktur + 1;
        $nol = "";
        for($i=0; $i<(5 - strlen($kode_faktur)); $i++){
            $nol .= "0";
        }
        $faktur = "NS".date("y")."-".$nol.$kode_faktur;
        return $faktur;
    }
}
