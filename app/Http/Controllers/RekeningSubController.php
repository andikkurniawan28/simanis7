<?php

namespace App\Http\Controllers;

use App\RekeningSub;
use Illuminate\Http\Request;

class RekeningSubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening_subs = RekeningSub::all();
        return view("rekening_sub.index", compact("rekening_subs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rekening_sub.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RekeningSub::create($request->all());
        return redirect()->route("rekening_sub.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(RekeningSub $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekening_sub = RekeningSub::whereId($id)->get()->last();
        return view("rekening_sub.edit", compact("rekening_sub"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RekeningSub::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekening_sub.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekeningSub  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RekeningSub::whereId($id)->delete();
        return redirect()->route("rekening_sub.index")->with("success", "Data berhasil dihapus");
    }
}
