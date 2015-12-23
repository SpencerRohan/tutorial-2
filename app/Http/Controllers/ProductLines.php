<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Theme;
use App\Vendor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductLines extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code = 'anvil')
    {
        $product = Product::with('theme')->whereCode($code)->first();
        $theme   = $product->theme;
        $vendors = setVendors();
        return view('productLines.index', compact('product', 'theme', 'vendors'));
    }

}
