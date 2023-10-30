<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usaha extends Model
{
    protected $table = "usaha";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
