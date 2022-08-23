<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrdersRequest;
use App\Http\Requests\UpdateOrdersRequest;
use App\Models\Order;
use App\Models\Restaurant;
use App\Models\Product;
use App\Models\Menu;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        $products = Product::all();
        // $countries = Country::all();
        return view('orders.index', compact('orders', 'products'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $restaurants = Restaurant::all();
        $menus = Menu::all();
        $users = User::all();
        $products = Product::all();
        return view('orders.create', compact('menus', 'restaurants', 'users', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrdersRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrdersRequest $request)
    {
        Order::create([
            //'restaurant_id' => $request->input('restaurant_id'),
            'product_id' => $request->input('product_id'),
            'status' => $request->input('status'),
            'user_id' => $request->input('user_id')

        ]);
        
        
        return redirect()->route('orders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show(Order $orders)
    {
        $order = Order::first();
        
        return view('orders.show', ['order' => $order]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $orders)
    {
        $restaurants = Restaurant::all();
        $products = Product::all();
        return view('orders.edit', compact('order', 'restaurants', 'products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrdersRequest  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrdersRequest $request, Order $orders)
    {
        $order->update([
            'status' => $request->input('status'),
            
        ]);
        return redirect()->route('all_orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $orders)
    {
        $order->delete();
        return redirect()->route('all_orders'); 
    }
    public function all_orders()
    {
        $orders = Order::all();
        $restaurants = Restaurant::all();
        $products = Product::all();
        return view('all_orders', compact('restaurants', 'orders', 'products'));
    }
}
