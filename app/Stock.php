<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = "stock";
    protected $primaryKey = "kode";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;

    public function nama_golongan(){
        return $this->belongsTo(Golongan::class, "golongan", "kode");
    }

    public function nama_sub_golongan(){
        return $this->belongsTo(SubGolongan::class, "subgol", "kode");
    }
}
