<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangRusak extends Model
{
    protected $table = "adjsta";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
