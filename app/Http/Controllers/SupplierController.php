<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $suppliers = Supplier::all();
        return view("supplier.index", compact("suppliers"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("supplier.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Supplier::create($request->all());
        return redirect()->route("supplier.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::whereId($id)->get()->last();
        return view("supplier.edit", compact("supplier"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Supplier::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("supplier.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::whereId($id)->delete();
        return redirect()->route("supplier.index")->with("success", "Data berhasil dihapus");
    }
}
