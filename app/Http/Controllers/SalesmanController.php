<?php

namespace App\Http\Controllers;

use App\Salesman;
use Illuminate\Http\Request;

class SalesmanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesmans = Salesman::all();
        return view("salesman.index", compact("salesmans"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("salesman.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Salesman::create($request->all());
        return redirect()->route("salesman.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salesman  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Salesman $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salesman  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesman = Salesman::whereId($id)->get()->last();
        return view("salesman.edit", compact("salesman"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salesman  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Salesman::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("salesman.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salesman  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Salesman::whereId($id)->delete();
        return redirect()->route("salesman.index")->with("success", "Data berhasil dihapus");
    }
}
