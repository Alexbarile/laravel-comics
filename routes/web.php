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
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

Route::get('/', function () {
    $cards = config('db.cards');
    $icon = config('db.icon');
    $social = config('db.social');

    return view('index', compact('cards', 'icon', 'social'));
})->name('homepage');
