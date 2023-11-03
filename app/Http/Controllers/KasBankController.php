<?php

namespace App\Http\Controllers;

use App\KasBank;
use App\RekeningAkuntansi;
use Illuminate\Http\Request;

class KasBankController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kas_banks = KasBank::orderBy("kode", "asc")->get();
        $rekening_akuntansis = RekeningAkuntansi::orderBy("kode", "asc")->get();
        return view("kas_bank.index", compact("kas_banks", "rekening_akuntansis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("kas_bank.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KasBank::create($request->all());
        return redirect()->route("kas_bank.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\KasBank  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(KasBank $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\KasBank  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $kas_bank = KasBank::where("kode", $kode)->get()->last();
        return view("kas_bank.edit", compact("kas_bank"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KasBank  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        KasBank::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("kas_bank.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KasBank  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        KasBank::where("kode", $kode)->delete();
        return redirect()->route("kas_bank.index")->with("success", "Data berhasil dihapus");
    }
}
