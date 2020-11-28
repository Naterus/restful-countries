<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ["id"];

    public function states(){
        return $this->hasMany(State::class);
    }

    public function president(){
        return $this->hasOne(President::class);
    }

    public function covid19(){
        return $this->hasOne(Covid19::class);
    }
}
