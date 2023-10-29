<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $guarded = [];

    public $timestamps = false;

    public function golongan(){
        return $this->belongsTo(Golongan::class);
    }

    public function termin(){
        return $this->belongsTo(Termin::class);
    }

    public function mata_uang(){
        return $this->belongsTo(MataUang::class);
    }
}
