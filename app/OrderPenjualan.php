<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class OrderPenjualan extends Model
{
    protected $table = "totso";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;

    public function nama_customer(){
        return $this->belongsTo(Customer::class, "kodesc", "kode");
    }

    public function nama_termin(){
        return $this->belongsTo(Termin::class, "termin", "kode");
    }

    public static function index(){
        return DB::table("totso")
            ->leftjoin("customer", "totso.kodesc", "customer.kode")
            ->leftjoin("termin", "totso.termin", "termin.kode")
            ->select([
                "totso.faktur as faktur",
                "totso.tgl as tgl",
                "totso.jthtmp as jthtmp",
                "totso.uang as uang",
                "totso.kurs as kurs",
                "totso.disc1 as disc1",
                "totso.ppn as ppn",
                "totso.subtotal as subtotal",
                "totso.discount as discount",
                "totso.pajak as pajak",
                "totso.total as total",
                "customer.nama as customer",
                "termin.keterangan as termin",
            ])
            ->orderBy("totso.tgl", "desc")
            ->get();
    }
}
