<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Termin extends Model
{
    protected $table = "termin";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
