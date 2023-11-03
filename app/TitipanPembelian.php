<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TitipanPembelian extends Model
{
    protected $table = "ttsup";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
