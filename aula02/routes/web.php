<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/paginateste', function () {
  return view('teste'); /*<-- nome da pagina */
});
Route::get('/login', function () {
  return view('login'); /*<-- nome da pagina */
});