<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;

class SupplierAktifController extends Controller
{
    public function __invoke($status = null)
    {
        $suppliers = Supplier::where("status", $status)->orderBy("kode", "asc")->get();
        return view("supplier.index", compact("suppliers", "status"));
    }
}
