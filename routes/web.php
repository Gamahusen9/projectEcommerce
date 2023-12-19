<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hellow World!';
});

Route::get('/hello Soleh', function () {
    return 'Hellow Unang!';
});

Route::get('/helo komar', function () {
    return 'Hello komar bapak fajar';
});

Route::get('/helo fawwaz', function () {
    return 'Kuliner aku padamu';
});

Route::get('/Helo World', function () {
    return 'World Hello';
});

Route::get('/about', function () {
    return 'about you';
});
