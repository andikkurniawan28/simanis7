<?php

namespace App\Http\Controllers;

use App\KasBank;
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
        $kas_banks = KasBank::all();
        return view("kas_bank.index", compact("kas_banks"));
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
    public function edit($id)
    {
        $kas_bank = KasBank::whereId($id)->get()->last();
        return view("kas_bank.edit", compact("kas_bank"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\KasBank  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        KasBank::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("kas_bank.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\KasBank  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        KasBank::whereId($id)->delete();
        return redirect()->route("kas_bank.index")->with("success", "Data berhasil dihapus");
    }
}
