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
          <a class="navbar-brand" href="/backend">ACME ADMIN DASHBOARD</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/">Home</a></li>
            <li><a href="/backend/users">Users</a></li>
            <li><a href="/backend/products">Products</a></li>
            <li><a href="/backend/themes">Themes</a></li>
            <li><a href="/backend/logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
    

        <div class= 'container spotlight article'>
          <div class ="row spotlight__row article__row">

            @if (count($errors))
              <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            
            @if (Auth::user()->is_admin)

              
              @yield('dash_content')

              <div class='col-sm-12'>
                <hr>
                <a href="/backend/users"><button class="btn btn-primary btn-brand">USERS</button></a>
                <a href="/backend/products"><button class="btn btn-primary btn-brand">PRODUCTS</button></a>
                <a href="/backend/themes"><button class="btn btn-primary btn-brand">THEMES</button></a>
              </div>
            @else
              <p> You are not an authorized Administrator of this site </p>
            @endif

          </div>
        </div>



      
    <script src="../assets/js/site.js" type="text/javascript"></script>
  </body>
</html>