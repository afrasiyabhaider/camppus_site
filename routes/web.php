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

Route::get('/', function () {
    return view('welcome');
});

Route::get('site/', 'CamppusSiteController@home');
Route::get('site/home', 'CamppusSiteController@home');
Route::get('site/contact', 'CamppusSiteController@contact');
Route::get('site/gallery', 'CamppusSiteController@gallery');
Route::get('site/course_list', 'CamppusSiteController@course_list');
Route::get('site/course_list1', 'CamppusSiteController@course_list1');
Route::get('site/universitylife', 'CamppusSiteController@universitylife');
Route::get('site/aboutus', 'CamppusSiteController@aboutus');
Route::get('site/camppus_tour', 'CamppusSiteController@camppus_tour');
Route::get('site/coming_soon', 'CamppusSiteController@coming_soon');
Route::get('site/calender', 'CamppusSiteController@calender');