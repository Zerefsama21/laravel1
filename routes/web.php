<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\StudentController@index')->middleware('auth');

// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/table', function () {
//     return view('table');
// });

// Route::get('/students', 'App\Http\Controllers\StudentController@index');   
Route::get('/register', 'App\Http\Controllers\UserController@register');
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login')->middleware('guest');
Route::post('/login/process', 'App\Http\Controllers\UserController@process');
Route::post('/store', 'App\Http\Controllers\UserController@store');
Route::post('/logout', 'App\Http\Controllers\UserController@logout');


// Route::controller(StudentController::class)->group(function(){
    
// });


//Stu
Route::get('/add/student', 'App\Http\Controllers\StudentController@create');
Route::post('/add/student', 'App\Http\Controllers\StudentController@store');
Route::get('/student/{student}', 'App\Http\Controllers\StudentController@show');
Route::put('/student/{student}', 'App\Http\Controllers\StudentController@update');
Route::delete('/student/{student}', 'App\Http\Controllers\StudentController@destroy');


Route::get('/pdf_generator', 'App\Http\Controllers\StudentController@pdf_generator_get');

//Weapon
// Route::get('/weapon/indexw', [WeaponController::class, 'index'])->name('weapon.indexw');
Route::get('/weapon/indexw', 'App\Http\Controllers\WeaponController@index')->name('weapon.indexw');
Route::get('/add/weapon', 'App\Http\Controllers\WeaponController@create');
Route::post('/add/weapon', 'App\Http\Controllers\WeaponController@store');
Route::get('/weapon/{weapon}', 'App\Http\Controllers\WeaponController@show');
Route::put('/weapon/{weapon}', 'App\Http\Controllers\WeaponController@update');
Route::delete('/weapon/{weapon}', 'App\Http\Controllers\WeaponController@destroy');

// Route::get('/search', 'SearchController@search')->name('search');
Route::get('/search', 'App\Http\Controllers\SearchController@search')->name('search');


// Route::get('/weapon/indexw', [WeaponController::class, 'index'])->name('weapon.indexw');
Route::get('/actlog/logindex', 'App\Http\Controllers\LogController@index')->name('actlog.logindex');

