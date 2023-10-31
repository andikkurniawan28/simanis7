<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningAkuntansi extends Model
{
    protected $table = "rekening";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
