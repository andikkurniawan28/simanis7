<?php

namespace App\Http\Controllers;

use App\RekeningAkuntansi;
use Illuminate\Http\Request;

class RekeningAkuntansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening_akuntansis = RekeningAkuntansi::all();
        return view("rekening_akuntansi.index", compact("rekening_akuntansis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rekening_akuntansi.create");
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
    public function edit($id)
    {
        $rekening_akuntansi = RekeningAkuntansi::whereId($id)->get()->last();
        return view("rekening_akuntansi.edit", compact("rekening_akuntansi"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekeningAkuntansi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RekeningAkuntansi::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekening_akuntansi.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekeningAkuntansi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RekeningAkuntansi::whereId($id)->delete();
        return redirect()->route("rekening_akuntansi.index")->with("success", "Data berhasil dihapus");
    }
}
