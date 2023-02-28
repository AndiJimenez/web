<?php

use Illuminate\Support\Facades\Route;

Route::view('/adm', 'welcome')->name('admin');
Route::view('/prin', 'inicio')->name('principal');
Route::view('/gato', 'gatos')->name('gatos');
Route::view('/perro', 'perros')->name('perros');
Route::view('/protect', 'protector')->name('protector');
Route::view('/suprotc', 'subprotector')->name('subirprotector');
Route::view('/subpr', 'subperros')->name('subirperros');
Route::view('/subad', 'subadoptante')->name('subiradoptante');
Route::view('/adp', 'adopcion')->name('adopciones'); 