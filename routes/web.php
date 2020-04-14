<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::post('/studentlogin', 'Auth\APIController@login')->name('userlogin');
Route::get('/details/{unit_code}', 'TimetableController@details')->name('details');
Route::get('/course/report', 'ChartController@index')->name('retakesReports');
Route::get('/repeat/reports', 'ChartController@repeat')->name('repeatsReports');
Route::get('/re', 'HomeController@Ret')->name('Ret');
Route::get('/country', 'AdminController@country')->name('country');

Route::get('/upload', 'EnquiriesController@upload');

Route::get('/advert', 'AdminController@advert')->name('advert');

Route::get('/retake', 'StudentResultsController@Retakes')->name('Retakes');
Route::get('/repeats', 'StudentResultsController@Repeat')->name('Repeat');
Route::get('/special', 'StudentResultsController@Specials')->name('Specials');
Route::get('/reports', 'StudentResultsController@Reports')->name('Reports');
Route::get('/failed', 'StudentResultsController@FailedUnits')->name('FailedUnits');
Route::post('/extract', 'TimetableController@extract')->name('extract');
Route::post('/extractexam', 'ExamController@extract')->name('extractexam');


Route::get('dean', 'ApplicationController@Dean')->name('dean');

Route::get('count/application', 'ApplicationController@countApplication')->name('countApplication');

Route::get('student', 'ApplicationController@studentapplication');
Route::get('files/{file}', 'ApplicationController@download')->name('download');


Route::post('import', 'EnquiriesController@import')->name('import');

Route::group(['middleware' => 'App\Http\Middleware\StudentMiddleware'], function()
{
	Route::match(['get', 'post'], '/memberOnlyPage/', 'HomeController@member');

});


Route::get('/', function () {
    return view('frontend/index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');





Route::group(['middleware' => 'auth'], function () {

});



Route::group(['middleware' => 'auth'], function () {
Route::resource('jobs', 'JobsController', ['except' => ['show']]);
	Route::resource('worker', 'WorkerController', ['except' => ['show']]);
	Route::get('/repeat', 'HomeController@repeat')->name('repeat');
	Route::get('/retakes', 'HomeController@retakes')->name('retakes');
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::resource('hosts', 'HostController', ['except' => ['show']]);
    Route::resource('event', 'EventsController', ['except' => ['show']]);
    Route::resource('course', 'CourseController', ['except' => ['show']]);
    Route::resource('partner', 'PartnersController', ['except' => ['show']]);

 Route::resource('participants', 'ParticipantsController', ['except' => ['show']]);

	Route::resource('enquiries', 'EnquiriesController', ['except' => ['show']]);
	Route::resource('review', 'ReviewController', ['except' => ['show']]);
	Route::resource('exams', 'ExamController', ['except' => ['show']]);
	// Route::get('application', ['as' => 'application.edit', 'uses' => 'ApplicationController@edit']);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});


Route::get('/', function () {
    return view('frontend/index');
});


// Route::get('/home', function () {
//     return view('frontend/index');
// });


Route::get('/about', function() {return view('frontend/about');});
Route::get('/events', function() {return view('frontend/Events');});
Route::get('/contact', function() {return view('frontend/contact');});
Route::get('/courses', function() {return view('frontend/courses');});

Route::get('/host', function() {return view('frontend/Host');});
Route::get('/partners', function() {return view('frontend/partners');});
Route::get('/resources', function() {return view('frontend/resources');});
Route::get('/participant', function() {return view('frontend/participant');});

Route::get('/curriculum', function() {return view('frontend/Curriculum');});

Route::get('/sign-up', function() {return view('frontend/registration');});


Route::get('/media', function() {return view('frontend/media');});
