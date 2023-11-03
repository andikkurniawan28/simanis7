<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangMati extends Model
{
    protected $table = "adjst";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
