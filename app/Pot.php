<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pot extends Model
{
    protected $table = "pot";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
