<?php

namespace App\Http\Controllers;

use App\Wilayah;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $wilayahs = Wilayah::all();
        return view("wilayah.index", compact("wilayahs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("wilayah.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Wilayah::create($request->all());
        return redirect()->route("wilayah.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Wilayah  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Wilayah $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Wilayah  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $wilayah = Wilayah::whereId($id)->get()->last();
        return view("wilayah.edit", compact("wilayah"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Wilayah  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Wilayah::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("wilayah.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Wilayah  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Wilayah::whereId($id)->delete();
        return redirect()->route("wilayah.index")->with("success", "Data berhasil dihapus");
    }
}
