<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalAccessToken extends Model
{
    public function user(){
        return $this->belongsTo(User::class,"tokenable_id","id");
    }
}
