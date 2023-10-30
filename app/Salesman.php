<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salesman extends Model
{
    protected $table = "salesman";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
