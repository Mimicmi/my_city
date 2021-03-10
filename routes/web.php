<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'pages/home') -> name('home');

Route::view('/about-me', 'pages/about-me') -> name('about');

Route::view('/help', 'pages/help') -> name('help');