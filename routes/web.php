<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PotController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsahaController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\HutangController;
use App\Http\Controllers\SatuanController;
use App\Http\Controllers\TerminController;
use App\Http\Controllers\KasBankController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\MataUangController;
use App\Http\Controllers\SalesmanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MutasiPotController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenawaranController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangMatiController;
use App\Http\Controllers\JurnalUmumController;
use App\Http\Controllers\BarangRusakController;
use App\Http\Controllers\RekeningSubController;
use App\Http\Controllers\SubGolonganController;
use App\Http\Controllers\BarangHilangController;
use App\Http\Controllers\BuktiKasMasukController;
use App\Http\Controllers\CustomerAktifController;
use App\Http\Controllers\RekeningIndukController;
use App\Http\Controllers\SupplierAktifController;
use App\Http\Controllers\BuktiBankMasukController;
use App\Http\Controllers\BuktiKasKeluarController;
use App\Http\Controllers\MataUangDeleteController;
use App\Http\Controllers\MataUangUpdateController;
use App\Http\Controllers\OrderPembelianController;
use App\Http\Controllers\OrderPenjualanController;
use App\Http\Controllers\ReturPembelianController;
use App\Http\Controllers\ReturPenjualanController;
use App\Http\Controllers\BarangRepottingController;
use App\Http\Controllers\BuktiBankKeluarController;
use App\Http\Controllers\PelunasanHutangController;
use App\Http\Controllers\PemakaianBarangController;
use App\Http\Controllers\PelunasanPiutangController;
use App\Http\Controllers\TitipanPembelianController;
use App\Http\Controllers\TitipanPenjualanController;
use App\Http\Controllers\RekeningAkuntansiController;
use App\Http\Controllers\RekeningBalanceIncomeController;
use App\Http\Controllers\MutasiBarangAntarGudangController;
use App\Http\Controllers\NotaTambahKurangPembelianController;
use App\Http\Controllers\NotaTambahKurangPenjualanController;

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

Route::get('/', "HomeController")->name("home");

// Auth
Route::get('login', "AuthController@login")->name("login");
Route::post('login', "AuthController@loginProcess")->name("login-process");
Route::get('logout', "AuthController@logout")->name("logout");

Route::get("dashboard", "DashboardController")->middleware(["auth"])->name("dashboard");
Route::resource("mata_uang", "MataUangController")->middleware(["auth"]);
Route::resource("gudang", "GudangController")->middleware(["auth"]);
Route::resource("pot", "PotController")->middleware(["auth"]);
Route::resource("golongan", "GolonganController")->middleware(["auth"]);
Route::resource("sub_golongan", "SubGolonganController")->middleware(["auth"]);
Route::resource("stock", "StockController")->middleware(["auth"]);
Route::resource("salesman", "SalesmanController")->middleware(["auth"]);
Route::resource("termin", "TerminController")->middleware(["auth"]);
Route::resource("wilayah", "WilayahController")->middleware(["auth"]);
Route::resource("usaha", "UsahaController")->middleware(["auth"]);
Route::resource("supplier", "SupplierController")->middleware(["auth"]);
Route::resource("customer", "CustomerController")->middleware(["auth"]);
Route::resource("kas_bank", "KasBankController")->middleware(["auth"]);
Route::resource("rekening_balance_income", "RekeningBalanceIncomeController")->middleware(["auth"]);
Route::resource("rekening_induk", "RekeningIndukController")->middleware(["auth"]);
Route::resource("rekening_sub", "RekeningSubController")->middleware(["auth"]);
Route::resource("rekening_akuntansi", "RekeningAkuntansiController")->middleware(["auth"]);
Route::get("stocks/{status?}", "StockAktifController")->name("stock_aktif")->middleware(["auth"]);
Route::get("suppliers/{status?}", "SupplierAktifController")->name("supplier_aktif")->middleware(["auth"]);
Route::get("customers/{status?}", "CustomerAktifController")->name("customer_aktif")->middleware(["auth"]);
Route::post("mata_uang_update", "MataUangUpdateController")->name("mata_uang_update")->middleware(["auth"]);
Route::post("mata_uang_delete", "MataUangDeleteController")->name("mata_uang_delete")->middleware(["auth"]);

Route::resource('order_pembelian', "OrderPembelianController")->middleware(["auth"]);
Route::resource('pembelian', "PembelianController")->middleware(["auth"]);
Route::resource('retur_pembelian', "ReturPembelianController")->middleware(["auth"]);
Route::resource('nota_tambah_kurang_pembelian', "NotaTambahKurangPembelianController")->middleware(["auth"]);
Route::resource('titipan_pembelian', "TitipanPembelianController")->middleware(["auth"]);
Route::resource('pelunasan_hutang', "PelunasanHutangController")->middleware(["auth"]);
Route::resource('order_penjualan', "OrderPenjualanController")->middleware(["auth"]);
Route::resource('penawaran', "PenawaranController")->middleware(["auth"]);
Route::resource('penjualan', "PenjualanController")->middleware(["auth"]);
Route::resource('retur_penjualan', "ReturPenjualanController")->middleware(["auth"]);
Route::resource('nota_tambah_kurang_penjualan', "NotaTambahKurangPenjualanController")->middleware(["auth"]);
Route::resource('titipan_penjualan', "TitipanPenjualanController")->middleware(["auth"]);
Route::resource('pelunasan_piutang', "PelunasanPiutangController")->middleware(["auth"]);
Route::resource('mutasi_barang_antar_gudang', "MutasiBarangAntarGudangController")->middleware(["auth"]);
Route::resource('mutasi_pot', "MutasiPotController")->middleware(["auth"]);
Route::resource("barang_mati", "BarangMatiController")->middleware(["auth"]);
Route::resource("barang_rusak", "BarangRusakController")->middleware(["auth"]);
Route::resource("barang_repotting", "BarangRepottingController")->middleware(["auth"]);
Route::resource("barang_hilang", "BarangHilangController")->middleware(["auth"]);
Route::resource("pemakaian_barang", "PemakaianBarangController")->middleware(["auth"]);
Route::resource("bukti_kas_masuk", "BuktiKasMasukController")->middleware(["auth"]);
Route::resource("bukti_kas_keluar", "BuktiKasKeluarController")->middleware(["auth"]);
Route::resource("bukti_bank_masuk", "BuktiBankMasukController")->middleware(["auth"]);
Route::resource("bukti_bank_keluar", "BuktiBankKeluarController")->middleware(["auth"]);
Route::resource("jurnal_umum", "JurnalUmumController")->middleware(["auth"]);
Route::resource('hutang', "HutangController")->middleware(["auth"]);

Route::resource("user", "UserController")->middleware(["auth"]);

Route::get("test", "TestController")->name("test");
