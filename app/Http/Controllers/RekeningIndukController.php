<?php

namespace App\Http\Controllers;

use App\RekeningInduk;
use Illuminate\Http\Request;
use App\RekeningBalanceIncome;

class RekeningIndukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening_induks = RekeningInduk::orderBy("kode", "asc")->get();
        return view("rekening_induk.index", compact("rekening_induks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        return view("rekening_induk.create", compact(
            "rekening_balance_incomes",
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
        RekeningInduk::create($request->all());
        return redirect()->route("rekening_induk.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekeningInduk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(RekeningInduk $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekeningInduk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $rekening_induk = RekeningInduk::where("kode", $kode)->get()->last();
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        return view("rekening_induk.edit", compact("rekening_induk", "rekening_balance_incomes"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekeningInduk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        RekeningInduk::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekening_induk.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekeningInduk  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        RekeningInduk::where("kode", $kode)->delete();
        return redirect()->route("rekening_induk.index")->with("success", "Data berhasil dihapus");
    }
}
