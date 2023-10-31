<?php

namespace App\Http\Controllers;

use App\Usaha;
use App\Termin;
use App\Wilayah;
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
        return redirect()->route("supplier_aktif", "Y");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wilayahs = Wilayah::all();
        $usahas = Usaha::all();
        $termins = Termin::all();
        return view("supplier.create", compact(
            "wilayahs",
            "usahas",
            "termins",
        ));
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
    public function edit($kode)
    {
        $supplier = Supplier::where("kode", $kode)->get()->last();
        $wilayahs = Wilayah::all();
        $usahas = Usaha::all();
        $termins = Termin::all();
        return view("supplier.edit", compact(
            "supplier",
            "wilayahs",
            "usahas",
            "termins",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        Supplier::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("supplier.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        Supplier::where("kode", $kode)->delete();
        return redirect()->route("supplier.index")->with("success", "Data berhasil dihapus");
    }
}
