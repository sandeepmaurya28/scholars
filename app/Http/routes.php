<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


//Route::get('/', ['as' => 'index', 'uses' => 'IndexController@IndexPage']);
Route::get('/', 'IndexController@IndexPage');
Route::get('/about', function () {
    return view('about/About');
});
Route::get('/courses', 'Course\CourseController@GetAllCourse');
Route::get('/services', 'Service\ServiceController@GetAllServices');
Route::get('/faculty', 'Faculty\FacultyController@GetAllFaculty');

Route::get('/contact', function () {
    return view('Contact/contact');
});
Route::get('/login', function () {
    return view('Login/login');
});
