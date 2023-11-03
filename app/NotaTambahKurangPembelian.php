<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotaTambahKurangPembelian extends Model
{
    protected $table = "dncnsup";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
