<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Theme;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;


class Products extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::paginate(10);
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $themes = Theme::all();
        $themeIds = [];
        foreach ($themes as $theme):
            $themeIds[$theme->id] = $theme->id;
        endforeach;
        return view('products.create', compact('themeIds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $product = Product::create($request->all());
        session()->flash('flash_message', "PUNY HUMAN - Your Product has been created!");
        return redirect()->route('backend.products.show', compact('product'));
    }

    /**
     * Display the specified resource.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
        $themes = Theme::all();
        $themeIds = [];
        foreach ($themes as $theme):
            $themeIds[$theme->id] = $theme->id;
        endforeach;
        return view('products.edit', compact('product', 'themeIds'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateProductRequest  $request
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->update($request->all());
        session()->flash('flash_message', "PUNY HUMAN - Your Product has been updated!");
        return redirect()->route('backend.products.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('flash_message', "PUNY HUMAN - You destroyed your Product!");
        return redirect()->route('backend.products.index');
    }

}