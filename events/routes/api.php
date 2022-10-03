<?php

Route::post('login','Api\V1\Admin\CompanyController@companyLogin');
Route::post('logindata','Api\V1\Admin\CompanyController@logindata');
Route::group(['middleware' => 'auth:sanctum'], function () {
Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Event
 Route::apiResource('events', 'EventApiController');
 Route::Post('events/{event}', 'EventApiController@update')->name('events.update');
 Route::get('companyevents', 'EventApiController@company_event')->name('companyevent.update');
    // Attendy
    Route::apiResource('attendies', 'AttendyApiController');
    Route::get('attendies_event/{id}', 'AttendyApiController@attendies_event')->name('attendies_event');

    Route::apiResource('participants', 'ParticipantApiController');
    Route::Post('participants/{participant}', 'ParticipantApiController@update')->name('participants.update');
    Route::get('companyparticipant','CompanyParticipantApiController@company_participants');
    Route::get('event_participants/{id}','EventApiController@event_participants');

});
});


