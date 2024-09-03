<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
     public function index(Request $request)
     {
         $categories = Category::all(); // Fetch all categories
         
         // Fetch products, filter by category if provided
         $products = Product::when($request->category_id, function ($query) use ($request) {
             return $query->where('category_id', $request->category_id);
         })->get();
     
         return view('home', compact('products', 'categories'));
     }
     
     
    public function indexForUser(Request $request)
     {
         $categories = Category::all();
         $products = Product::when($request->category_id, function ($query) use ($request) {
             return $query->where('category_id', $request->category_id);
         })->get();
     
         // Debugging line to check product data
         dd($products);
     
         return view('user.home', compact('products', 'categories'));
     }
     // Category.php
public function products()
{
    return $this->hasMany(Product::class);
}

// Product.php
public function category()
{
    return $this->belongsTo(Category::class);
}

}
