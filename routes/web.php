<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
use App\Http\Controllers\Controller1;

Route::get('/info/php', [Controller1::class, 'phpInfo']);

Route::get('/info/client', [Controller1::class, 'clientInfo']);

Route::get('/info/database', [Controller1::class, 'databaseInfo']);