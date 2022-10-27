<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Farmer extends Model
{
    //
    protected $guarded = [];
    protected $table = "farmer";

    function bank(){
        return $this->hasOne(Banks::class,'id','bank_id');
    }
}
