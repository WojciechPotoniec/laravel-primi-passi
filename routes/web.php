<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
        $user = ['name' => 'Wojtek', 'surname' => 'Potoniec'];
    return view('home', compact('user')); //come secondo valore bisogna obligatoriamente passare un'array associativo
});

Route::get('/contatti', function () {
    return view('contact');
});