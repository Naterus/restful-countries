<?php

namespace App\Http\Controllers\Api\V1;

use App\Covid19;
use App\Http\Controllers\Controller;
use App\Http\Resources\Covid19\Covid19Collection;
use Illuminate\Http\Request;

class Covid19Controller extends Controller
{
    public function getAllCases(){

        return new Covid19Collection(Covid19::all());
    }
}
