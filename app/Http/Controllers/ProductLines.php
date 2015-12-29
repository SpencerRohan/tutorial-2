<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Contracts\ProductContract;
use App\Repositories\VendorRepository;

class ProductLines extends Controller
{

    protected $product, $vendor;

    public function __construct(ProductContract $product, VendorRepository $vendor)
    {
        $this->product = $product;
        $this->vendor = $vendor;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($code = 'anvil')
    {
        $product = $this->product->getByCode($code, ['theme']);
        $theme   = $product->theme;
        $vendors = $this->vendor->getVendors();
        return view('productLines.index', compact('product', 'theme', 'vendors'));
    }

}
