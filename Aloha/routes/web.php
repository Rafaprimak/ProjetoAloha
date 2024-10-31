<?php
use Illuminate\Support\Facades\Route;

// Rota para a página inicial
Route::get('/', function () {
    return view('home');
})->name('home');

// Rota para a página de login
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Rota para a página de administrador
Route::get('/admin', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('admin.dashboard');