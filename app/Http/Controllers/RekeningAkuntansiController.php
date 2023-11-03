<?php

namespace App\Http\Controllers;

use App\RekeningSub;
use App\RekeningInduk;
use App\RekeningAkuntansi;
use Illuminate\Http\Request;
use App\RekeningBalanceIncome;
use Illuminate\Support\Facades\DB;

class RekeningAkuntansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening_akuntansis = DB::table("rekening")
            ->leftjoin("rekbi", "rekening.rekbi", "rekbi.kode")
            ->leftjoin("rekmain", "rekening.mainkode", "rekmain.kode")
            ->leftjoin("reksub", "rekening.subkode", "reksub.kode")
            ->select([
                "rekening.kode as kode",
                "rekening.nama as nama",
                "rekening.rekbi as rekbi",
                "rekening.mainkode as mainkode",
                "rekening.subkode as subkode",
                "rekbi.nama as nama_rekening_balance_income",
                "rekmain.nama as nama_rekening_induk",
                "reksub.nama as nama_rekening_sub",
            ])->get();

        $rekening_balance_incomes = RekeningBalanceIncome::all();
        $rekening_induks = RekeningInduk::all();
        $rekening_subs = RekeningSub::all();
        return view("rekening_akuntansi.index", compact(
            "rekening_akuntansis",
            "rekening_balance_incomes",
            "rekening_induks",
            "rekening_subs",
        ));
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
        $rekening_subs = RekeningSub::all();
        return view("rekening_akuntansi.create", compact(
            "rekening_balance_incomes",
            "rekening_induks",
            "rekening_subs",
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
        RekeningAkuntansi::create($request->all());
        return redirect()->route("rekening_akuntansi.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekeningAkuntansi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(RekeningAkuntansi $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekeningAkuntansi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $rekening_akuntansi = RekeningAkuntansi::where("kode", $kode)->get()->last();
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        $rekening_induks = RekeningInduk::all();
        $rekening_subs = RekeningSub::all();
        return view("rekening_akuntansi.edit", compact(
            "rekening_akuntansi",
            "rekening_balance_incomes",
            "rekening_induks",
            "rekening_subs",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekeningAkuntansi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        RekeningAkuntansi::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekening_akuntansi.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekeningAkuntansi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        RekeningAkuntansi::where("kode", $kode)->delete();
        return redirect()->route("rekening_akuntansi.index")->with("success", "Data berhasil dihapus");
    }
}
