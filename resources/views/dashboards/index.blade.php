 <!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>ADMIN</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/site.css">
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
              <h4>Dashboard Main</h4>
              <hr>
              <div class='col-sm-4'>
                <h4>Count</h4>
                <ul class="list-group">
                  <li class="list-group-item">
                    <span class="badge">{{ count($users) }}</span>
                    Total Users
                  </li>
                  <li class="list-group-item">
                    <span class="badge">{{ count($admins) }}</span>
                    Total Admins
                  </li>
                  <li class="list-group-item">
                    <span class="badge">{{ count($themes) }}</span>
                    Total Themes
                  </li>
                  <li class="list-group-item">
                    <span class="badge">{{ count($products) }}</span>
                    Total Products
                  </li>
                </ul>
              </div>

              <div class='col-sm-4'>
                <h4>Product Lines</h4>
                <ul class="list-group">
                  @foreach ($products as $product)
                    <li class="list-group-item">
                      Product: {{ $product->name }}<br>
                      Theme ID: {{ $product->theme->id }}<br>
                      Layout: {{ $product->layout }}
                    </li>
                  @endforeach
                </ul>
              </div>

              <div class='col-sm-4'>
                <h4>Themes</h4>
                <ul class="list-group">
                  @foreach ($themes as $theme)
                    <li class="list-group-item">
                      ID: {{ $theme->id }}<br>
                      Color: {{ $theme->color }}<br>
                      Headline: {{ $theme ->smHeadline }}
                    </li>
                  @endforeach
                </ul>
              </div>

              <div class='col-sm-12'>
                <hr>
                <a href="/backend/users"><button class="btn btn-primary btn-brand">USERS</button></a>
                <a href="/backend/products"><button class="btn btn-primary btn-brand">PRODUCTS</button></a>
                <a href="/backend/themes"><button class="btn btn-primary btn-brand">THEMES</button></a>
              </div>
          </div>
        </div>



      
    <script src="../assets/js/site.js" type="text/javascript"></script>
  </body>
</html>