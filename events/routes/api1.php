<?php

Route::post('login','Api\V1\Admin\CompanyController@companyLogin');
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Event
 Route::apiResource('events', 'EventApiController');

    // Attendy
    Route::apiResource('attendies', 'AttendyApiController');
	Route::apiResource('participants', 'ParticipantApiController');
});
