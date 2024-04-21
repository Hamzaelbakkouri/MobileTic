<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return View('welcome');
});

Route::get('/allo', function () {
    return 'allo';
});
