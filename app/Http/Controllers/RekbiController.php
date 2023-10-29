<?php

namespace App\Http\Controllers;

use App\Rekbi;
use Illuminate\Http\Request;

class RekbiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekbis = Rekbi::all();
        return view("rekbi.index", compact("rekbis"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rekbi.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rekbi::create($request->all());
        return redirect()->route("rekbi.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rekbi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Rekbi $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rekbi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekbi = Rekbi::whereId($id)->get()->last();
        return view("rekbi.edit", compact("rekbi"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rekbi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Rekbi::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekbi.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rekbi  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rekbi::whereId($id)->delete();
        return redirect()->route("rekbi.index")->with("success", "Data berhasil dihapus");
    }
}
