<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/lista', function () {
    
    $busca = request('search');
    return view('lista', ['busca' => $busca]);

});

Route::get('/listaescolha/{id?}', function ( $id = null ) {
    return view('listaescolha', ['id' => $id]);
});
