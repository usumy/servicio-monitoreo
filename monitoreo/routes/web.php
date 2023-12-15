<?php


use Illuminate\Support\Facades\Route;

route::view('/','home')->name('home');

Route::resource('falla','fallacontroller')
->names('falla')
->parameters(['falla'=>'falla']);

Route::resource('Depto','DeptoController')
->names('Depto')
->parameters(['Depto'=>'Depto']);
Route::resource('Prioridad','PrioridadController')
->names('Prioridad')
->parameters(['Prioridad'=>'Prioridad']);



Auth::routes([]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



