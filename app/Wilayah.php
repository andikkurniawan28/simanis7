<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wilayah extends Model
{
    protected $table = "wilayah";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
