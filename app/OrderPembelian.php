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
}
