<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BuktiKasMasuk extends Model
{
    protected $table = "totbukti";
    protected $primaryKey = "faktur";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;
}
