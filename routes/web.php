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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','IndexController@index');
Route::get('/contact','ContactController@create');
Route::post('/contact','ContactController@store');
Route::get('/jobseeker-register','JobSeekerRegisterController@create');
Route::post('/jobseeker-register','JobSeekerRegisterController@store');
Route::match(['get','post'],'/jobseeker-login','loginController@login');
Route::get('/jobseeker-logout','loginController@logout');
//login and register for employeer
Route::get('/employeer-register','EmployeerRegisterController@create');
Route::post('/employeer-register','EmployeerRegisterController@store');

//middleware for jobseeker
Route::group(['middleware'=>['jobSeeker']],function(){
    Route::get('/dashboard','dashboardController@dashboard');
    Route::resource('preferences','JobPreferenceController');
    Route::resource('personalinfos','PersonalInfoController');
    Route::resource('educations','EducationController');
    Route::resource('trainings','TrainingController');
    Route::resource('experiences','WorkExperienceController');
    Route::resource('languages','languageController');
    Route::resource('references','ReferenceController');
    Route::resource('profiles','ProfileController');
    Route::get('profiles-edit','ProfileEditController@edit');

});
