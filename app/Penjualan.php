<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    protected $table = "totsl";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
