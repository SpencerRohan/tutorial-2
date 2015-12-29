<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Theme;
use App\Http\Requests;
use App\Http\Controllers\Controller;


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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        $id = $product->id;
        return redirect()->route('backend.products.show', compact('id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $product = Product::findOrFail($id);
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
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productUpdate = $request->all();
        $product = Product::find($id);
        $product->update($productUpdate);
        return redirect()->route('backend.products.show', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('backend.products.index');
    }

}