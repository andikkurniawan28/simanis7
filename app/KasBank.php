<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasBank extends Model
{
    protected $table = "bank";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
