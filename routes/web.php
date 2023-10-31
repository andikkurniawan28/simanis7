<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TerminController;
use App\Http\Controllers\KasBankController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\MataUangController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RekeningSubController;
use App\Http\Controllers\SubGolonganController;
use App\Http\Controllers\CustomerAktifController;
use App\Http\Controllers\RekeningIndukController;
use App\Http\Controllers\SupplierAktifController;
use App\Http\Controllers\RekeningAkuntansiController;
use App\Http\Controllers\RekeningBalanceIncomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name("home");

Route::get('login', function () {
    return view('auth.login');
})->name("login");

// Master
Route::resources([
    "mata_uang"                 => "MataUangController",
    "gudang"                    => "GudangController",
    "pot"                       => "PotController",
    "golongan"                  => "GolonganController",
    "sub_golongan"              => "SubGolonganController",
    "satuan"                    => "SatuanController",
    "stock"                     => "StockController",
    "salesman"                  => "SalesmanController",
    "termin"                    => "TerminController",
    "wilayah"                   => "WilayahController",
    "usaha"                     => "UsahaController",
    "supplier"                  => "SupplierController",
    "customer"                  => "CustomerController",
    "kas_bank"                  => "KasBankController",
    "rekening_balance_income"   => "RekeningBalanceIncomeController",
    "rekening_induk"            => "RekeningIndukController",
    "rekening_sub"              => "RekeningSubController",
    "rekening_akuntansi"        => "RekeningAkuntansiController",
]);

Route::get("stocks/{status?}", "StockAktifController")->name("stock_aktif");
Route::get("suppliers/{status?}", "SupplierAktifController")->name("supplier_aktif");
Route::get("customers/{status?}", "CustomerAktifController")->name("customer_aktif");

Route::resource("user", "UserController");
