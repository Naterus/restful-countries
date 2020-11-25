<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ["throttle:20,1","api_logger"]], function(){


    Route::get("/",'CountryController@getCountries');

    Route::get("/countries",'CountryController@getCountries')->name("countries.index");

    Route::get("/countries/{country}",'CountryController@getCountry')->name("countries.show");

    Route::get("/countries/{country}/states",'StateController@getStates')->name("states.index");

    Route::get("/countries/{country}/states/{state}",'StateController@getState')->name("states.show");

    Route::get("/countries/{country}/states/{state}/districts",'DistrictController@getDistricts')->name("districts.index");

    Route::get("/countries/{country}/states/{state}/districts/{district}",'DistrictController@getDistrict')->name("districts.show");

});



