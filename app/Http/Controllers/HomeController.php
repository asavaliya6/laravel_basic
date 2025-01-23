<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        // return view('home');
        // $allCategories = ['Category 1', 'Category 2'];
        // $allCategories = DB::table('categories')->get(); 

        // $allCategories = Category::all(); 
        $categories = Category::all(); 
        // $posts = Post::orderBy('id', 'desc')->get(); 
        // $posts = Post::latest()->get();

        // return view('home', ['categories' => $allCategories]); 
        // return view('home', [
        //     'categories' => $allCategories,
        //     'posts' => $posts
        // ]);

        // $posts = Post::where('category_id', request('category_id'))->latest()->get(); 

        $posts = Post::when(request('category_id'), function ($query) { 
            $query->where('category_id', request('category_id'));
        })->latest()->get();

        return view('home', compact('categories', 'posts')); 
    }
}