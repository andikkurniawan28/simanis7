<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningInduk extends Model
{
    protected $table = "rekmain";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
