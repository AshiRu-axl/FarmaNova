<?php

use App\Http\Controllers\clienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('template');
});

Route::view('/login','auth.login')->name('login');


Route::get('/401', function () {
    return view('pages.401');
});

Route::get('/404', function () {
    return view('pages.404');
});


Route::view('/panel', 'panel.index')->name('panel');

Route::resources(['clientes'=> clienteController::class]);

Route::get('/distribuidor', function () {
    return view('distribuidor.index');
});
