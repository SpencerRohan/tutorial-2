<?php

  namespace App\Http\Controllers;

  use App\Product;
  use App\Theme;
  use App\Vendor;


  function setProductLine($code) {
    $product = Product::where('code', $code)->first();
    return ($product) ? $product : Product::find(1);
  }

  function setVendors() {
    return Vendor::all();
  }



?>