<?php

namespace App\Http\Controllers;

use App\Usaha;
use App\Termin;
use App\Wilayah;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route("customer_aktif", "Y");
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
        return view("customer.create", compact(
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
        Customer::create($request->all());
        return redirect()->route("customer.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($kode)
    {
        $customer = Customer::where("kode", $kode)->get()->last();
        $wilayahs = Wilayah::all();
        $usahas = Usaha::all();
        $termins = Termin::all();
        return view("customer.edit", compact(
            "customer",
            "wilayahs",
            "usahas",
            "termins",
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $kode)
    {
        Customer::where("kode", $kode)->update($request->except(["_token", "_method"]));
        return redirect()->route("customer.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($kode)
    {
        Customer::where("kode", $kode)->delete();
        return redirect()->route("customer.index")->with("success", "Data berhasil dihapus");
    }
}
