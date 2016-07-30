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

Route::get('/layout', function () {
    return view('app/layout/app');
});

Route::get('/', function () {
    return view('app/pages/homepage/index');
});

Route::get('courses', function () {
    return view('app/pages/courses/index');
});

Route::get('contact', function () {
    return view('app/pages/contact/index');
});

Route::get('who-we-are', function () {
    return view('app/pages/who-we-are/index');
});

Route::get('faq', function () {
    return view('app/pages/faq/index');
});

