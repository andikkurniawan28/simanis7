<?php

namespace App\Http\Controllers;

use App\RekeningSub;
use App\RekeningInduk;
use Illuminate\Http\Request;
use App\RekeningBalanceIncome;

class RekeningSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening_subs = RekeningSub::orderBy("kode", "asc")->get();
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        $rekening_induks = RekeningInduk::all();
        return view("rekening_sub.index", compact("rekening_subs", "rekening_balance_incomes", "rekening_induks"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        $rekening_induks = RekeningInduk::all();
        return view("rekening_sub.create", compact(
            "rekening_balance_incomes",
            "rekening_induks",
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
        RekeningSub::create($request->all());
        return redirect()->route("rekening_sub.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(RekeningSub $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $rekening_sub = RekeningSub::where("kode", $kode)->get()->last();
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        $rekening_induks = RekeningInduk::all();
        return view("rekening_sub.edit", compact("rekening_sub", "rekening_balance_incomes", "rekening_induks"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        RekeningSub::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekening_sub.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        RekeningSub::where("kode", $kode)->delete();
        return redirect()->route("rekening_sub.index")->with("success", "Data berhasil dihapus");
    }
}
