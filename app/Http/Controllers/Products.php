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
        $product = Product::where('code', $code)->first();

        return view('products.index', ['product' => $product]);

    }

}
// $data->name
// if $data->layout == 'centered'
// $name

