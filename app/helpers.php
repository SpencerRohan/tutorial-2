<?php

  namespace App\Http\Controllers;

  use App\Product;
  use App\Theme;


  function setProductLine($code) {
    return Product::where('code', $code)->first();
  }

  function setTheme($product) {
    return Theme::where('product_id', $product->id)->first();
  }
?>