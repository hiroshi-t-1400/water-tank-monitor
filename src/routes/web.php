<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitorDataController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', MonitorDataController::class .'@index')->name('posts.index');
