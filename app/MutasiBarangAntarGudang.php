<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MutasiBarangAntarGudang extends Model
{
    protected $table = "totmts";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
