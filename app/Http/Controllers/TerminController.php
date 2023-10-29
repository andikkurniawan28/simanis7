<?php

namespace App\Http\Controllers;

use App\Termin;
use Illuminate\Http\Request;

class TerminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $termins = Termin::all();
        return view("termin.index", compact("termins"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("termin.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Termin::create($request->all());
        return redirect()->route("termin.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Termin  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Termin $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Termin  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $termin = Termin::whereId($id)->get()->last();
        return view("termin.edit", compact("termin"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Termin  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Termin::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("termin.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Termin  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Termin::whereId($id)->delete();
        return redirect()->route("termin.index")->with("success", "Data berhasil dihapus");
    }
}
