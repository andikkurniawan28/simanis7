<?php

namespace App\Http\Controllers;

use App\Golongan;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $golongans = Golongan::orderBy("id", "asc")->get();
        return view("golongan.index", compact("golongans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("golongan.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Golongan::create($request->all());
        return redirect()->route("golongan.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Golongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Golongan $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Golongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $golongan = Golongan::whereId($id)->get()->last();
        return view("golongan.edit", compact("golongan"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Golongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Golongan::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("golongan.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Golongan  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Golongan::whereId($id)->delete();
        return redirect()->route("golongan.index")->with("success", "Data berhasil dihapus");
    }
}
