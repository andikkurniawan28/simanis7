<?php

namespace App\Http\Controllers;

use App\Stock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StockAktifController extends Controller
{
    public function __invoke($status = null)
    {
        if($status == "Y"){
            $stocks = DB::table("stock")
                ->leftjoin("golongan", "stock.golongan", "golongan.kode")
                ->leftjoin("subgol", "stock.subgol", "subgol.kode")
                ->select([
                    "stock.kode",
                    "stock.barcode",
                    "stock.nama",
                    "golongan.keterangan as nama_golongan",
                    "subgol as nama_sub_golongan",
                    "satuan",
                    "hj",
                    "hb",
                ])
                ->where("status", "Y")->orderBy("kode", "asc")
                ->get()->chunk(100);
        } else {
            $stocks = DB::table("stock")
                ->leftjoin("golongan", "stock.golongan", "golongan.kode")
                ->leftjoin("subgol", "stock.subgol", "subgol.kode")
                ->select([
                    "stock.kode",
                    "stock.barcode",
                    "stock.nama",
                    "golongan.keterangan as nama_golongan",
                    "subgol as nama_sub_golongan",
                    "satuan",
                    "hj",
                    "hb",
                ])
                ->where("status", "!=", "Y")->orderBy("kode", "asc")
                ->get()->chunk(100);
        }
        return view("stock.index", compact("stocks", "status"));
    }
}
