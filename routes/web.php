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
    //Список преподавателей
    Route::get('practice','LkController@practice')->name('practice');
    //Добавление ивента
    Route::post('saveEvent', 'LkController@addEvent')->name('addEvent');
    //Поиск ивентов
    Route::get('searchEvent', 'LkController@searchEvent')->name('searchEvent');
    //Проверка доступного времени
    Route::get('updateTime', 'SupportController@updateTime')->name('updateTime');
    //Подача запроса на практику
    Route::post('practiceRequest','LkController@ practiceRequest')->name('practiceRequest');
    //Редактор пользователей
    Route::get('usersInfo', 'LkController@usersInfo')->name('usersInfo');
    //Обновлние таблицы пользователей
    Route::get('tableUser','SupportController@tableUser')->name('tableUser');

    Route::post('saveEditUser', 'LkController@saveEditUser')->name('saveEditUser');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
