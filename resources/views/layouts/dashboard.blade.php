 <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/site.css') }}">
  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/backend">ACME ADMIN DASHBOARD - Welcome back {{ Auth::user()->name }}!</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('backend.users.index') }}">Users</a></li>
            <li><a href="{{ route('backend.products.index') }}">Products</a></li>
            <li><a href="{{ route('backend.themes.index') }}">Themes</a></li>
            <li><a href="{{ route('backend.logout') }}" alt="logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    

        <div class= 'container spotlight article'>
          <div class ="row spotlight__row article__row">

            @include('layouts/_errors')
            @include('layouts/_flash')


            @if (Auth::user()->is_admin)
              
              @yield('dash_content')

              <div class='col-sm-12'>
                <hr>
                <a href="{{ route('backend.users.index') }}"><button class="btn btn-primary btn-brand">USERS</button></a>
                <a href="{{ route('backend.products.index') }}"><button class="btn btn-primary btn-brand">PRODUCTS</button></a>
                <a href="{{ route('backend.themes.index') }}"><button class="btn btn-primary btn-brand">THEMES</button></a>
              </div>
            @else
              <p> You are not an authorized Administrator of this site </p>
            @endif

          </div>
        </div>



      
    <script src="{{ asset('assets/js/site.js') }}" type="text/javascript"></script>
    <script>
      $('div.flash').delay(3000).slideUp(1000)
    </script>
  </body>
</html>