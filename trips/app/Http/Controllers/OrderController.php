<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Country;
use App\Models\Hotel;
use App\Models\User;


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
        $hotels = Hotel::all();
        $countries = Country::all();
        return view('orders.index', compact('hotels', 'orders', 'countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        $hotels = Hotel::all();
        $users = User::all();
        return view('orders.create', compact('countries', 'hotels', 'users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOrderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        Order::create([
            'hotel_id' => $request->input('hotel_id'),
            'check_in' => $request->input('check_in'),
            'check_out' => $request->input('check_out'),
            'country_id' => $request->input('country_id'),
            'status' => $request->input('status'),
            'user_id' => $request->input('user_id')

        ]);
        
        
        return redirect()->route('orders.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $order = Order::first();
        
        return view('orders.show', ['order' => $order]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        $countries = Country::all();
        $hotels = Hotel::all();
        return view('orders.edit', compact('order', 'hotels', 'countries'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOrderRequest  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        $order->update([
            'status' => $request->input('status'),
            
        ]);
        return redirect()->route('all_orders');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('all_orders');
    }

    public function all_orders()
    {
        $orders = Order::all();
        $hotels = Hotel::all();
        $countries = Country::all();
        return view('all_orders', compact('hotels', 'orders', 'countries'));
    }
}
