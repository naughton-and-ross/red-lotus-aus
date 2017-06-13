<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/header.css')}}">
        @include('head')
    </head>
    <body>
        @include('header')
        <script>
          (function (window, document) {
          document.getElementById('toggle').addEventListener('click', function (e) {
              document.getElementById('tuckedMenu').classList.toggle('custom-menu-tucked');
              document.getElementById('toggle').classList.toggle('x');
          });
          })(this, this.document);
         </script>
    </body>
</html>
