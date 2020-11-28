<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Covid19 extends Model
{
    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function user(){
        return $this->belongsTo(User::class,"updated_by","id");
    }

    protected $guarded = ["id"];
}
