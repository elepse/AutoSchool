<?php

use Illuminate\Support\Facades\Route;

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
//дом
Route::get('/', function () {
    return view('newHome');
})->name('mainPage');
//новости
Route::get('/news', function () {
    return view('news');
})->name('news');
//галлерия
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');
// о нас
Route::get('/about', function () {
    return view('about');
})->name('about');
//контакты
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

//роуты личного кабинета
Route::group(['middleware' => 'auth', 'prefix' => 'lk'], function () {
    Route::get('dashboard', function () {
        return view('admin/schedule');
    })->name('adminSchedule');
//Практика
    Route::get('practice','LkController@practice')->name('practice');
    //Добавление ивента
    Route::post('saveEvent', 'LkController@addEvent')->name('addEvent');
    //Поиск ивентов
    Route::get('searchEvent', 'LkController@searchEvent')->name('searchEvent');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
