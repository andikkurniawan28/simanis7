<?php

namespace App\Http\Controllers;

use App\RekeningBalanceIncome;
use Illuminate\Http\Request;

class RekeningBalanceIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rekening_balance_incomes = RekeningBalanceIncome::all();
        return view("rekening_balance_income.index", compact("rekening_balance_incomes"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("rekening_balance_income.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        RekeningBalanceIncome::create($request->all());
        return redirect()->route("rekening_balance_income.index")->with("success", "Data berhasil disimpan");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\RekeningBalanceIncome  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function show(RekeningBalanceIncome $mataUang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\RekeningBalanceIncome  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $rekening_balance_income = RekeningBalanceIncome::whereId($id)->get()->last();
        return view("rekening_balance_income.edit", compact("rekening_balance_income"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\RekeningBalanceIncome  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        RekeningBalanceIncome::whereId($id)->update($request->except(["_token", "_method"]));
        return redirect()->route("rekening_balance_income.index")->with("success", "Data berhasil diupdate");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\RekeningBalanceIncome  $mataUang
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        RekeningBalanceIncome::whereId($id)->delete();
        return redirect()->route("rekening_balance_income.index")->with("success", "Data berhasil dihapus");
    }
}
