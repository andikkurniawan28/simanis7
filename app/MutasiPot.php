<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutasiPot extends Model
{
    protected $table = "admts";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
