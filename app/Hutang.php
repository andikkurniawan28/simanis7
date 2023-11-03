<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hutang extends Model
{
    protected $table = "htg";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
