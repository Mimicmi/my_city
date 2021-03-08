<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'Hi my city!')</title>
  </head>

  <body>
    @yield('content')
  </body>

  <footer>
    <p>&copy; Copyright {{ date('Y') }} &middot; <a href="/about-me">About me</a> </p>
  </footer>

</html>