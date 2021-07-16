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
Route::post('/change/lang','mainController@change_lang')->name('change.lang');


Route::get('/get_push',function() {
    shell_exec("git add . && git commit -m 'edit' && git push");
    dd('Done !');
});

Route::get('/get_pull',function() {
    shell_exec("git config --global user.email 'abdelrahmangamal990@gmail.com' && git config --global user.name 'AbdelrahmanBl' && git pull https://github.com/AbdelrahmanBl/gym.git master");
});