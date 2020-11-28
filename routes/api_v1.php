<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ["throttle:20,1","api_logger"]], function(){


    Route::get("/",'CountryController@getCountries');

    Route::get("/countries",'CountryController@getCountries')->name("countries.index");

    Route::get("/countries/{country}",'CountryController@getCountry')->name("countries.show");

    Route::get("/countries/{country}/presidents",'PresidentController@getPresidents')->name("presidents.index");

    Route::get("/countries/{country}/states",'StateController@getStates')->name("states.index");

    Route::get("/countries/{country}/states/{state}",'StateController@getState')->name("states.show");

    Route::get("/covid19",'Covid19Controller@getAllCases');

});

Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. Check that you entered the correct url'], 404);
});



