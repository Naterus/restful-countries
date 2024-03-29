<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' =>  ["auth:sanctum","throttle:100,1","api_logger"]], function(){

    Route::get("/",'CountryController@getCountries');

    Route::get("/countries",'CountryController@getCountries')->name("countries.index");

    Route::get("/countries/{country}",'CountryController@getCountry')->name("countries.show");

    Route::get("/countries/{country}/presidents",'PresidentController@getPresidents')->name("presidents.index");

    Route::get("/countries/{country}/presidents/{president}",'PresidentController@getPresident')->name("presidents.show");

    Route::get("/countries/{country}/states",'StateController@getStates')->name("states.index");

    Route::get("/countries/{country}/states/{state}",'StateController@getState')->name("states.show");

    Route::get("/countries/{country}/states/{state}/districts",'DistrictController@getDistricts')->name("districts.index");

    Route::post("/upload-districts",'DistrictController@upload')->name("districts.upload");

    Route::get("/countries/{country}/states/{state}/districts/{id}",'DistrictController@getDistrict')->name("districts.show");

    Route::get("/covid19",'Covid19Controller@getAllCases')->name("covid19.index");

    Route::get("/covid20",'Covid19Controller@getAllCases')->name("covid20.index");

});

Route::fallback(function(){
    return response()->json([
        'message' => 'Resource Not Found. Check that you entered the correct address'], 404);
});



