<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>@yield('title')</title>
    @include('includes.style')
  </head>
  <body>

   @include('includes.header')

   @yield('content')

   @include('includes.footer')

    @include('includes.script')
  </body>
</html>
