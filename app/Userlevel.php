<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userlevel extends Model
{
    protected $table = "userlevel";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
