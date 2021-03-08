<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('home');
});

Route::get('/about-me', function() {
  return view('about-me');
});