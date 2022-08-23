<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductsRequest;
use App\Http\Requests\UpdateProductsRequest;
use App\Models\Product;
use App\Models\Menu;
use App\Models\Restaurant;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menus = Menu::all();
        $products = Product::all()->sortBy('name');
        return view('products.index', compact('menus', 'products'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::all();
        return view('products.create', compact('menus'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    {
        Product::create([
            'name' => $request->input('name'),
            'menu_id' => $request->input('menu_id'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
            'price' => $request->input('price'),
            
        ]);
        return redirect()->route('products.index')->with('success_message', 'Menu created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        $products = Product::first(); 
        
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        
        $menus = Menu::all();
        return view('products.edit', compact('product', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductsRequest  $request
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductsRequest $request, Product $products)
    {
        
        $products->update([
            'name' => $request->input('name'),
            'menu_id' => $request->input('menu_id'),
            'description' => $request->input('description'),
            'photo' => $request->input('photo'),
            'price' => $request->input('price'),
            
        ]);
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
