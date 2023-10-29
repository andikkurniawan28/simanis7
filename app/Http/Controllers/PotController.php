<?php

namespace App\Http\Controllers;

use App\Pot;
use Illuminate\Http\Request;

class PotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pots = Pot::all();
        return view("pot.index", compact("pots"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pot.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pot::create($request->all());
        return redirect()->route("pot.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Pot $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pot = Pot::whereId($id)->get()->last();
        return view("pot.edit", compact("pot"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Pot::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("pot.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pot  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pot::whereId($id)->delete();
        return redirect()->route("pot.index")->with("success", "Data berhasil dihapus");
    }
}
