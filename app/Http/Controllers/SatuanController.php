<?php

namespace App\Http\Controllers;

use App\Satuan;
use Illuminate\Http\Request;

class SatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $satuans = Satuan::all();
        return view("satuan.index", compact("satuans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("satuan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Satuan::create($request->all());
        return redirect()->route("satuan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Satuan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Satuan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Satuan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $satuan = Satuan::whereId($id)->get()->last();
        return view("satuan.edit", compact("satuan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Satuan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Satuan::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("satuan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Satuan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Satuan::whereId($id)->delete();
        return redirect()->route("satuan.index")->with("success", "Data berhasil dihapus");
    }
}
