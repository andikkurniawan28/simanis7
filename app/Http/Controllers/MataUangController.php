<?php

namespace App\Http\Controllers;

use App\MataUang;
use Illuminate\Http\Request;

class MataUangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mata_uangs = MataUang::orderBy("tgl", "desc")->get();
        return view("mata_uang.index", compact("mata_uangs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("mata_uang.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        MataUang::create($request->all());
        return redirect()->route("mata_uang.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(MataUang $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $mata_uang = MataUang::where("kode", $kode)->get()->last();
        return view("mata_uang.edit", compact("mata_uang"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        // return $request->all();
        // MataUang::where("kode", $kode)->where("tgl", $request->tgl)->update($request->except(["_token", "_method"]));
        // return redirect()->route("mata_uang.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        MataUang::where("kode", $kode)->delete();
        return redirect()->route("mata_uang.index")->with("success", "Data berhasil dihapus");
    }
}
