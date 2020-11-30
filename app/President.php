<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }
    protected $guarded = ["id"];
}
