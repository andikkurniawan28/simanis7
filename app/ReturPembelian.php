<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReturPembelian extends Model
{
    protected $table = "totrb";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
