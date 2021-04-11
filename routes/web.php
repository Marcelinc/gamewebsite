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

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/galeria','GaleriaController@index')->name('galeria');
Route::get('/sklep','SklepController@index')->name('sklep');
Route::get('/u1','SklepController@u1')->name('u1');
Route::get('/u2','SklepController@u2')->name('u2');
Route::get('/u3','SklepController@u3')->name('u3');
Route::get('/m1','SklepController@m1')->name('m1');
Route::get('/m2','SklepController@m2')->name('m2');
Route::get('/m3','SklepController@m3')->name('m3');
Route::get('/zamowienie','ZamowienieController@index')->name('zamowienie');

Route::get('/dane','DaneController@index')->name('dane');
Route::post('/daneForm','DaneController@store')->name('daneStore');
Route::get('/daneCreate','DaneController@create')->name('daneCreate');
Route::get('/daneCreateForm','DaneController@createToForm')->name('daneCreateForm');
Route::get('/daneEdit','DaneController@edit')->name('daneEdit');
Route::put('/dane','DaneController@update')->name('daneUpdate');

Route::get('/order','ZamowieniaController@index')->name('order');
Route::get('/orderCreate','ZamowieniaController@create')->name('orderCreate');
Route::post('/orderStore','ZamowieniaController@store')->name('orderStore');
Route::get('/orderCancel/{id}','ZamowieniaController@destroy')->name('cancel');
