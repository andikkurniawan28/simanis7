<?php

namespace App\Http\Controllers;

use App\SubGolongan;
use Illuminate\Http\Request;

class SubGolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_golongans = SubGolongan::orderBy("kode", "asc")->get();
        return view("sub_golongan.index", compact("sub_golongans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("sub_golongan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        SubGolongan::create($request->all());
        return redirect()->route("sub_golongan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubGolongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(SubGolongan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubGolongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $sub_golongan = SubGolongan::where("kode", $kode)->get()->last();
        return view("sub_golongan.edit", compact("sub_golongan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubGolongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        SubGolongan::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("sub_golongan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubGolongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        SubGolongan::where("kode", $kode)->delete();
        return redirect()->route("sub_golongan.index")->with("success", "Data berhasil dihapus");
    }
}
