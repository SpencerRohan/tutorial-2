<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/site.css">
  </head>

  <body>

    <div class="logo">
      <img class="logo__image" src="{{{ asset('assets/images/block_title.png') }}}" >
    </div>
   
    <div class="container spotlight">
      <div class ="row spotlight__row">
          <h3>@yield('title')</h3>
      </div>
    </div>
    
    <div class= 'container article'>
        <div class ="row article__row">
         
            @if (count($errors))
              <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{!! $error !!}</li>
                    @endforeach
                </ul>
              </div>
            @endif

            @yield('form')


        </div>
    </div>

    <footer>
      <div class="container">
        <a href="#" alt="HOME">Home</a> |
        <a href="#" alt= "Privacy Policy">Privacy Policy</a> |
        <a href="#" alt="Contact">Contact Us</a>
      </div>
    </footer>

    <script src="../assets/js/site.js" type="text/javascript"></script>
  </body>
</html>