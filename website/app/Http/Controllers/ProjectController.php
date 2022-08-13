<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    function index() {
        $products = DB::table('products')->get();
        return view('index', compact('products'));
    }

    function single_product(Request $request, $id) {

        $product_array = DB::table('products')->where('id', $id)->get();
        return view('single_product', compact('product_array')); 

    }
}
