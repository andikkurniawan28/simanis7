<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangHilang extends Model
{
    protected $table = "adjstc";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
