<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangRepotting extends Model
{
    protected $table = "adjstb";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
