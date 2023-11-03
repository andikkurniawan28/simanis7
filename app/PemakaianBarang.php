<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemakaianBarang extends Model
{
    protected $table = "adprt";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
