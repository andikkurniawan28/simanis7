<?php

namespace App\Http\Controllers;

use App\DataTables\StockDataTable;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(StockDataTable $stockDataTable)
    {
        return $stockDataTable->render("stock");
    }
}
