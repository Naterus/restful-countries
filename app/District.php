<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $guarded = ["id"];

    public function state($country){
        return $this->belongsTo(State::class,"state_id","id")->where("country_id",$country)->first();
    }

}
