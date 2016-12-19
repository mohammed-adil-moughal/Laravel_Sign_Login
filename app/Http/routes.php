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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard',function(){
   return view('admin.dashboard'); 
});
Route::get('/adduser','HomeController@Adduser');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/addorganisation', 'HomeController@Addorganisation');
Route::post('/regadmin','HomeController@Regadmin');
Route::post('/regorganisation','HomeController@Regorganisation');
Route::post('/regsuperadmin','HomeController@Regsuperadmin');
Route::get('/allusers','HomeController@Allusers');
Route::get('/addsuperadmin','HomeController@Addsuperadmin');
Route::get('/allorganisations','HomeController@Allorganisations');
Route::get('getadmins/{id}','HomeController@Getadmins');