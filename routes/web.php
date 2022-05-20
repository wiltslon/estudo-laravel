<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {

    $nome  = "Wiltslon";
    $idade = 27;

    $arr = [1,2,3,4,5];

    return view('welcome',
    [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => "Programador",
        'arr' => $arr
    
    ]);
});

Route::get('/gallery', function () {
    $busca = request('search');

    return view('gallery',['busca' => $busca]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/gallery_item/{id?}', function ($id = null) {
    return view('item',['id' => $id]);
});
