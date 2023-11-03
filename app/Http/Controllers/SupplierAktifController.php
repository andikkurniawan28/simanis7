<?php

namespace App\Http\Controllers;

use App\Usaha;
use App\Termin;
use App\Wilayah;
use App\Supplier;
use Illuminate\Http\Request;

class SupplierAktifController extends Controller
{
    public function __invoke($status = null)
    {
        $suppliers = Supplier::where("status", $status)->orderBy("kode", "asc")->get();
        $wilayahs = Wilayah::all();
        $usahas = Usaha::all();
        $termins = Termin::all();
        return view("supplier.index", compact(
            "suppliers",
            "status",
            "wilayahs",
            "usahas",
            "termins",
        ));
    }
}
