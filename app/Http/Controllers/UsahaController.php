<?php

namespace App\Http\Controllers;

use App\Usaha;
use Illuminate\Http\Request;

class UsahaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usahas = Usaha::all();
        return view("usaha.index", compact("usahas"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("usaha.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Usaha::create($request->all());
        return redirect()->route("usaha.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Usaha  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Usaha $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Usaha  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usaha = Usaha::whereId($id)->get()->last();
        return view("usaha.edit", compact("usaha"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Usaha  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Usaha::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("usaha.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Usaha  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usaha::whereId($id)->delete();
        return redirect()->route("usaha.index")->with("success", "Data berhasil dihapus");
    }
}
