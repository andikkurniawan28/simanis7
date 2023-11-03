<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningSub extends Model
{
    protected $table = "reksub";
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
}
