<?php

namespace App\Http\Controllers;

use App\Usaha;
use App\Termin;
use App\Wilayah;
use App\Customer;
use Illuminate\Http\Request;

class CustomerAktifController extends Controller
{
    public function __invoke($status = null)
    {
        $customers = Customer::where("status", $status)->orderBy("kode", "asc")->get();
        $wilayahs = Wilayah::all();
        $usahas = Usaha::all();
        $termins = Termin::all();
        return view("customer.index", compact(
            "customers",
            "status",
            "wilayahs",
            "usahas",
            "termins",
        ));
    }
}
