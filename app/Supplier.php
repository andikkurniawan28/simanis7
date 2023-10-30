<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "supplier";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
