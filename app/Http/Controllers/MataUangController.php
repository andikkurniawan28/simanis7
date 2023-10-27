<?php

namespace App\Http\Controllers;

use App\MataUang;
use Illuminate\Http\Request;

class MataUangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mata_uangs = MataUang::all();
        return view("mata_uang.index", compact("mata_uangs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(MataUang $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit(MataUang $mataUang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MataUang $mataUang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MataUang  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy(MataUang $mataUang)
    {
        //
    }
}
