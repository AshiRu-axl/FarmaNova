<?php

use App\Http\Controllers\clienteController;
use App\Http\Controllers\familiaController;
use App\Http\Controllers\presentacionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.admin');
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

Route::resources(['familias'=> familiaController::class]);

Route::resources(['presentaciones'=> presentacionController::class]);


Route::get('/admin', function(){
    return view('layouts.admin');
});



