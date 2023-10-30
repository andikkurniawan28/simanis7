<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubGolongan extends Model
{
    protected $table = "subgol";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
