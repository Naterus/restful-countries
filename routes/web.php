<?php

use Illuminate\Support\Facades\Route;


Route::get('/','HomeController@index')->name('home');

Route::get('/donate','HomeController@donate')->name('donate');

Route::get('/api-documentation','HomeController@docs')->name('docs');

Route::get('/api-documentation/version/{version}','HomeController@documentation')->name('documentation');

Route::get('/feedback','HomeController@feedback')->name('feedback');

Route::get('/request-access-token','HomeController@requestAccessToken')->name('request_token');

Route::post('/feedback/submit','HomeController@submitFeedback')->name('feedback.submit');



Route::group(['middleware' => ["guest"]], function() {
    Route::get('administrator/login', 'AdminController@login')->name('admin.login');

    Route::post('administrator/login/attempt', 'AdminController@loginAttempt')->name('admin.login.attempt');
});

Route::group(['middleware' => ["auth.admin"]], function() {

    Route::get('administrator/logout','AdminController@logout')->name('admin.logout');

    Route::get('administrator/dashboard', 'AdminController@dashboard')->name('admin.dashboard')->middleware("permission.check:VIEW DASHBOARD");

    Route::get('administrator/feedbacks', 'AdminController@feedbacks')->name('admin.feedbacks')->middleware("permission.check:VIEW FEEDBACKS");

    Route::get('administrator/api-requests', 'AdminController@apiRequests')->name('admin.api_requests')->middleware("permission.check:VIEW API REQUESTS");

    Route::get('administrator/users', 'AdminController@users')->name('admin.users')->middleware("permission.check:MANAGE USER");

    Route::post('administrator/user/delete', 'AdminController@deleteUser')->name('admin.user.delete')->middleware("permission.check:MANAGE USER");

    Route::post('administrator/users/create', 'AdminController@createUser')->name('admin.users.create')->middleware("permission.check:MANAGE USER");

    Route::get('administrator/roles', 'RoleController@roles')->name('admin.roles')->middleware("permission.check:MANAGE ROLE");

    Route::post('administrator/roles/create', 'RoleController@createRole')->name('admin.roles.create')->middleware("permission.check:MANAGE ROLE");

    Route::get('administrator/roles/{id}', 'RoleController@editRole')->name('admin.roles.edit')->middleware("permission.check:MANAGE ROLE");

    Route::post('administrator/roles/{id}/update', 'RoleController@updateRole')->name('admin.roles.edit.update')->middleware("permission.check:MANAGE ROLE");

    Route::get('administrator/profile', 'AdminController@profile')->name('admin.profile');

    Route::post('administrator/profile/update', 'AdminController@updateProfile')->name('admin.profile.update');

    Route::get('administrator/countries', 'CountryController@countries')->name('admin.countries')->middleware("permission.check:VIEW COUNTRY");

    Route::post('administrator/country/create', 'CountryController@createCountry')->name('admin.countries.create')->middleware("permission.check:CREATE COUNTRY");

    Route::get('administrator/countries/{id}', 'CountryController@editCountry')->name('admin.countries.edit')->middleware("permission.check:UPDATE COUNTRY");

    Route::post('administrator/countries/{id}/update', 'CountryController@updateCountry')->name('admin.countries.edit.update')->middleware("permission.check:UPDATE COUNTRY");

    Route::post('administrator/country/delete', 'CountryController@deleteCountry')->name('admin.countries.delete')->middleware("permission.check:DELETE COUNTRY");

    Route::get('administrator/countries/{country}/covid19/edit', 'Covid19Controller@editCovid19')->name('admin.covid19.edit')->middleware("permission.check:UPDATE COVID19");

    Route::post('administrator/countries/{country}/covid19/update', 'Covid19Controller@updateCovid19')->name('admin.covid19.update')->middleware("permission.check:UPDATE COVID19");

    Route::post('administrator/countries/{country}/covid19/import', 'Covid19Controller@importData')->name('admin.covid19.import')->middleware("permission.check:UPDATE COVID19");

    Route::get('administrator/countries/{id}/states', 'StateController@states')->name('admin.states')->middleware("permission.check:VIEW STATE");

    Route::post('administrator/countries/{id}/state/create', 'StateController@createState')->name('admin.states.create')->middleware("permission.check:CREATE STATE");

    Route::get('administrator/countries/{country}/states/{state}', 'StateController@editState')->name('admin.states.edit')->middleware("permission.check:UPDATE STATE");

    Route::post('administrator/country/state/delete', 'StateController@deleteState')->name('admin.states.delete')->middleware("permission.check:DELETE STATE");

    Route::post('administrator/countries/{country}/states/{state}/update', 'StateController@updateState')->name('admin.states.edit.update')->middleware("permission.check:UPDATE STATE");

    Route::get('administrator/countries/{id}/presidents', 'PresidentController@presidents')->name('admin.presidents')->middleware("permission.check:VIEW PRESIDENT");

    Route::get('administrator/countries/{country}/presidents/{president}', 'PresidentController@editPresident')->name('admin.presidents.edit')->middleware("permission.check:UPDATE PRESIDENT");

    Route::post('administrator/countries/{country}/presidents/{president}/update', 'PresidentController@updatePresident')->name('admin.presidents.edit.update')->middleware("permission.check:UPDATE PRESIDENT");

    Route::post('administrator/countries/{country}/president/create', 'PresidentController@createPresident')->name('admin.presidents.create')->middleware("permission.check:CREATE PRESIDENT");

});
