<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;

class StockAktifController extends Controller
{
    public function __invoke($status = null)
    {
        $stocks = Stock::where("status", $status)->orderBy("kode", "asc")->limit(100)->get();
        return view("stock.index", compact("stocks", "status"));
    }
}
