<?php

use App\Http\Controllers\Homework;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/for', [Homework::class, 'for']);
