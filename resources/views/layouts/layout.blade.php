<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <title>@yield('title')</title>

    <link rel="stylesheet" type="text/css" href="../assets/css/site.css">
    <style>
      <? include 'partials/style.php'; ?>
    </style>


  </head>

  <body class="<?= 'layout-'.$layout ?>">
      @yield('body')

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

