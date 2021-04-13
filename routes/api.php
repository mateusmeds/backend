<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::put("/usuarios/{usuario}", "UsuarioController@update")->name("usuarios.update");
Route::delete("/usuarios/{usuario}", "UsuarioController@destroy")->name("usuarios.destroy");
Route::post("/usuarios", "UsuarioController@store")->name("usuarios.store");
Route::get("/usuarios", "UsuarioController@index")->name("usuarios.index");
