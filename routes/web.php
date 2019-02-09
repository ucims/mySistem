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

Route::get('/about', function () {
    return view("about");
});

Route::get('/masuk', function(){
    return view('masuk');
});

Route::get('about/{id}', function($id){
    return $id;
});

// Route::get('/sample', function(){
//     return view('new');
// });

// Route::redirect('/old', '/about', 301);
Route::post('/sample', 'UserController@show');