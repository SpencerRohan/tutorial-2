<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/site.css') }}">
    <style>@include('layouts/_style')</style>
  </head>

  <body class="layout-{{ $product->layout }}">
    @yield('body')

    <footer>
      <div class="container">
        <a href="#" alt="HOME">Home</a> |
        <a href="#" alt= "Privacy Policy">Privacy Policy</a> |
        <a href="#" alt="Contact">Contact Us</a> |
        @if (Auth::check())
        <a href="{{ route('backend') }}" alt="dashboard">Dashboard</a> |
          <a href="{{ route('backend.logout') }}" alt="logout">Logout</a>
        @else
          <a href="{{ route('backend.login') }}" alt="Login">Login</a> |
          <a href="{{ route('backend.register') }}" alt="Register">Register</a>

        @endif
      </div>
    </footer>

    <script src="{{ asset('assets/js/site.js') }}" type="text/javascript"></script>
  </body>
</html>

