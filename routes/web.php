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

Route::get('/', 'mainController@index')->name('main.index');
Route::get('/checkout', 'mainController@checkout')->name('main.checkout');
Route::get('/checkout/success', 'mainController@success')->name('main.checkout.success');
Route::post('/register/payment','mainController@register_payment')->name('register.payment');
Route::post('/change/lang','mainController@change_lang')->name('change.lang');
Route::post('/change/gender','mainController@change_gender')->name('change.gender');