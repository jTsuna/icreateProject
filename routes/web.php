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
    return view('index.index');
});
Route::get('/ourworks', function () {
    return view('ourworks.ourworks');
});
Route::get('/ourclients', function () {
    return view('ourclients.ourclients');
});
Route::get('/ourworks_events', function () {
    return view('ourworks_events.ourworks_events');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
