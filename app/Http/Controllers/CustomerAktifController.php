<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerAktifController extends Controller
{
    public function __invoke($status = null)
    {
        $customers = Customer::where("status", $status)->orderBy("kode", "asc")->get();
        return view("customer.index", compact("customers", "status"));
    }
}
