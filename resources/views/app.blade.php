<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title', config('app.name'))</title>
  </head>

  <body>
    @yield('content')
    <br>
    {{ config('project.quotation') }}
  </body>

  <footer>
    <p>&copy; Copyright {{ date('Y') }} 
      
      @if(!Route::is('about'))
      &middot; <a href="{{ route('about') }}">About me</a> 
      @endif
    </p>
  </footer>

</html>