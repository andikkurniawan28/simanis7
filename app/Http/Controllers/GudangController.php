<?php

namespace App\Http\Controllers;

use App\Gudang;
use Illuminate\Http\Request;

class GudangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gudangs = Gudang::orderBy("id", "asc")->get();
        return view("gudang.index", compact("gudangs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("gudang.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Gudang::create($request->all());
        return redirect()->route("gudang.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Gudang $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gudang = Gudang::whereId($id)->get()->last();
        return view("gudang.edit", compact("gudang"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Gudang::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("gudang.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gudang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gudang::whereId($id)->delete();
        return redirect()->route("gudang.index")->with("success", "Data berhasil dihapus");
    }
}
