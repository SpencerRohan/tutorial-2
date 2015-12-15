<?php

  namespace App\Http\Controllers;

  use App\Product;
  use App\Theme;


  function setProductLine($code) {
    $product = Product::where('code', $code)->first();
    return ($product) ? $product : Product::where('code', 'anvil')->first();
  }

  function setTheme($product) {
    return Theme::where('product_id', $product->id)->first();
  }
?>