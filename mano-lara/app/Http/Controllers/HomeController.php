<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {

        $allCategories = Category::all();
        $allPosts = Post::when(request('category_id'), function($query){
        $query->where('category_id', request('category_id'));
        })
        ->latest()
        ->get(); //Post::orderBy('id', 'desc');

        return view ('index', [
            'categories' => $allCategories,
            'posts' => $allPosts
        ]);
    }
}
