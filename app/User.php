<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "username";
    protected $primaryKey = "username";
    protected $guarded = [];
    public $timestamps = false;
    public $incrementing = false;

    public function level(){
        return $this->belongsTo(Userlevel::class, "menulevel", "kode");
    }
}
