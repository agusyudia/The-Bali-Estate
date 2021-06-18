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

Route::get('/', 'HomeController@home')->name('index');
Route::get('/property', 'HomeController@property')->name('property');
Route::get('/property-baru', 'HomeController@property2')->name('propertybaru');
Route::get('/detail-property', 'HomeController@detailproperty')->name('detailproperty');
Route::get('/agen', 'HomeController@agen')->name('agenhome');
Route::get('/agendetail/{id}', 'HomeController@agendetail')->name('agendetail');
Route::get('/kontak', 'HomeController@kontak')->name('kontak');
 

Route::get('admin/login', 'AuthController@showFormLogin')->name('auth/login');
Route::post('admin/login', 'AuthController@login');
Route::get('admin/register', 'AuthController@showFormRegister')->name('auth/register');
Route::post('admin/register', 'AuthController@register');

Route::get('admin/pembeli', 'Admin\PembeliController@index')->name('pembeli');


Route::get('admin/agen', 'Admin\AgenController@index')->name('agenadmin');
Route::get('admin/agen/add', 'Admin\AgenController@create')->name('agenadd');
Route::post('admin/agen/add', 'Admin\AgenController@store')->name('formagen');
Route::get('admin/agen/edit/{id}', 'Admin\AgenController@edit')->name('agenedit');
Route::put('admin/agen/update/{id}', 'Admin\AgenController@update')->name('update');
Route::delete('admin/agen/delete/{id}', 'Admin\AgenController@destroy')->name('agendelete');


Route::get('admin/pemilik', 'Admin\PemilikController@index')->name('pemilik');
Route::get('admin/pemilik/add', 'Admin\PemilikController@create')->name('pemilikadd');
Route::post('admin/pemilik/add', 'Admin\PemilikController@store')->name('formpemilik');
Route::get('admin/pemilik/edit/{id}', 'Admin\PemilikController@edit')->name('pemilikedit');
Route::put('admin/pemilik/update/{id}', 'Admin\PemilikController@update')->name('updatepemilik');
Route::delete('admin/pemilik/delete/{id}', 'Admin\PemilikController@destroy')->name('pemilikdelete');


Route::get('admin/property/rumah/', 'Admin\property\RumahController@index')->name('rumah');
Route::get('admin/property/rumah/add', 'Admin\property\RumahController@create')->name('rumahadd');
Route::post('admin/property/rumah/add', 'Admin\property\RumahController@store')->name('formrumah');
Route::get('admin/property/rumah/edit/{id}', 'Admin\property\RumahController@edit')->name('rumahedit');
Route::put('admin/property/rumah/update/{id}', 'Admin\property\RumahController@update')->name('update');
Route::get('admin/property/rumah/addimage/{id}', 'Admin\property\RumahController@imageadd')->name('imageadd');
Route::post('admin/property/rumah/addimage', 'Admin\property\RumahController@updateimage')->name('updateimage');
Route::delete('admin/property/rumah/delete/{id}', 'Admin\property\RumahController@destroy')->name('rumahdelete');
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', 'HomeController@index')->name('layout');
    Route::get('logout', 'AuthController@logout')->name('auth/logout');
 
});
