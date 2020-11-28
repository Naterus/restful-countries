<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }

    protected $guarded = ["id"];
}
