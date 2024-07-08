<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexforuser()
    {
        //
        $products = DB::table('products')->get();
        return view('products.index', ['products' => $products]);
    }
    public function indexforadmin()
    {
        //
        $products = DB::table('products')->get();
        return view('products.index', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        //return view('products.create', ['categories' => $categories]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'starting_bid' => 'required|numeric',
            'start_price' => 'required|numeric',
            'bid_expiry' => 'required|date',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // Handle image upload
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);

        // Store product data in database
        $product = DB::table('products')->insert([
            'name' => $request->name,
            'description' => $request->description,
            'starting_bid' => $request->starting_bid,
            'start_price' => $request->start_price,
            'bid_expiry' => $request->bid_expiry,
            'category_id' => $request->category_id,
            'image' => $imageName,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        
       // if ($product) {
            //return redirect()->route('products.index')->with('success', 'Product added successfully!');
       // } else {
           // return redirect()->back()->with('error', 'Error adding product.');
       // }
    
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
