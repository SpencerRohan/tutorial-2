<?php

  namespace App\Http\Controllers;

  use App\Product;


  function setProductLine($code) {
    return Product::where('code', $code)->first();
  }

  function setTheme($product) {
    return $product->theme[0];
  }
?>