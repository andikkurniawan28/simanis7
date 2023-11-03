<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaTambahKurangPenjualan extends Model
{
    protected $table = "dncncus";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
