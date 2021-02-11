<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $guarded = ["id"];

    public function states(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(State::class);
    }

    public function president(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(President::class);
    }

    public function presidents(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(President::class);
    }

    public function covid19(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Covid19::class);
    }
}
