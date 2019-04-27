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
Route::get('/news', function (){
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

Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function (){
   Route::get('dashboard', function () {
       return view('admin/admin');
   })->name('adminDashBoard');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
