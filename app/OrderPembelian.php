<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPembelian extends Model
{
    protected $table = "totpo";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;

    public function nama_supplier(){
        return $this->belongsTo(Supplier::class, "kodesc", "kode");
    }

    public function nama_termin(){
        return $this->belongsTo(Termin::class, "termin", "kode");
    }
}
