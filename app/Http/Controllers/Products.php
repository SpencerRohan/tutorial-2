<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code = 'anvil')
    {
        $product = setProductLine($code);
        $theme = setTheme($product);
        return view('products.index', compact('product', 'theme'));

    }

}
