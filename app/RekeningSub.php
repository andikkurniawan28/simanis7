<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RekeningSub extends Model
{
    protected $table = "reksub";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
