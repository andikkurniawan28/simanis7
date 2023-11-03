<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningInduk extends Model
{
    protected $table = "rekmain";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;

    public function rekening_balance_income(){
        return $this->belongsTo(RekeningBalanceIncome::class, "rekbi", "kode");
    }
}
