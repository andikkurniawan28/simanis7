<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturPenjualan extends Model
{
    protected $table = "totslr";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
