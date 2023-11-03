<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TitipanPenjualan extends Model
{
    protected $table = "ttcus";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
