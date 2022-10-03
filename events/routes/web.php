<?php
use Illuminate\Support\Facades\Route;
use App\Http\Conttrollers\Admin\SettingConttroller;

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
	Route::post('/logout', 'HomeController@logoutuser')->name('logout');
    Route::get('/report', 'HomeController@report')->name('report');
    Route::post('/report/submit', 'HomeController@event_participant')->name('event.participant');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Crm Status
    Route::delete('crm-statuses/destroy', 'CrmStatusController@massDestroy')->name('crm-statuses.massDestroy');
    Route::resource('crm-statuses', 'CrmStatusController');

    // Crm Customer
    Route::delete('crm-customers/destroy', 'CrmCustomerController@massDestroy')->name('crm-customers.massDestroy');
    Route::resource('crm-customers', 'CrmCustomerController');

    // Crm Note
    Route::delete('crm-notes/destroy', 'CrmNoteController@massDestroy')->name('crm-notes.massDestroy');
    Route::resource('crm-notes', 'CrmNoteController');

    // Crm Document
    Route::delete('crm-documents/destroy', 'CrmDocumentController@massDestroy')->name('crm-documents.massDestroy');
    Route::post('crm-documents/media', 'CrmDocumentController@storeMedia')->name('crm-documents.storeMedia');
    Route::post('crm-documents/ckmedia', 'CrmDocumentController@storeCKEditorImages')->name('crm-documents.storeCKEditorImages');
    Route::resource('crm-documents', 'CrmDocumentController');

    // Company
    Route::delete('companies/destroy', 'CompanyController@massDestroy')->name('companies.massDestroy');
    Route::resource('companies', 'CompanyController');


    // Participant
    Route::delete('participants/destroy', 'ParticipantController@massDestroy')->name('participants.massDestroy');
    Route::resource('participants', 'ParticipantController');

    // Event
    Route::delete('events/destroy', 'EventController@massDestroy')->name('events.massDestroy');
    Route::resource('events', 'EventController');

    //Excel
    Route::post('/uploadexcel', 'ExcelUploadController@uploadexcel')->name('excel');
    // Attendy
    Route::delete('attendies/destroy', 'AttendyController@massDestroy')->name('attendies.massDestroy');
    Route::resource('attendies', 'AttendyController');
    //change status
    Route::post('/changestatus', 'ParticipantController@participantstatus')->name('event_status');


});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::get('/pdf',function(){
    return view('admin.pdf.eventpdf');
});
Route::post('company/password/{token}', [App\Http\Controllers\Admin\CompanyController::class,'createpassword'])->name('create.password');

Route::get('setting', [App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin.setting.index');
Route::get('menu', [App\Http\Controllers\Admin\SettingController::class, 'menu'])->name('admin.setting.menu');
Route::get('checkout', [App\Http\Controllers\Admin\SettingController::class, 'checkout'])->name('admin.setting.checkout');