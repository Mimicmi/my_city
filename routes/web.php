<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('pages/home');
}) -> name('home');

Route::get('/about-me', function() {
  return view('pages/about-me');
}) -> name('about');

Route::get('/help', function() {
  return view('pages/help');
}) -> name('help');