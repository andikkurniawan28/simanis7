<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningBalanceIncome extends Model
{
    protected $table = "rekbi";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
