<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningAkuntansi extends Model
{
    protected $table = "rekening";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;

    public function rekening_balance_income(){
        return $this->belongsTo(RekeningBalanceIncome::class, "rekbi", "kode");
    }

    public function rekening_induk(){
        return $this->belongsTo(RekeningInduk::class, "mainkode", "kode");
    }

    public function rekening_sub(){
        return $this->belongsTo(RekeningSub::class, "subkode", "kode");
    }
}
