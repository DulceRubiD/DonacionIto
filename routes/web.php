<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Donador;

Route::get('/', function () {
    return view('welcome');
});

Route::get('donador', function () {
    return view('Donador/donador');
})->name('registro_donador');

Route::get('requisitos', function () {
    return view('requisitos');
})->name('requisito');

Route::get('beneficiario', function () {
    return view('Beneficiario/beneficiario');
})->name('bene');

Route::get('mensaje', function () {
    return view('mensaje');
})->name('mensaje');

Route::resource('donadores','DonadorController');
Route::resource('beneficiarios','BeneficiarioController');


Route::get('/dos', function () {
    return view('test');
}); 

Route::get('/preguntas', function () {
    return view('preguntas');
})-> name('preguntas'); 


Route::post('/contactar', 'EmailController@contact')->name('contact');



