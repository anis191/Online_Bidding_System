<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexforuser(Request $request)
    {
        //
        $query = DB::table('products');

        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }
    
        $products = $query->get();
        $categories = DB::table('categories')->get();
    
        return view('user\index', ['products' => $products, 'categories' => $categories]);
    }
    public function indexforadmin()
    {
        //
        $products = DB::table('products')
    ->join('categories', 'products.category_id', '=', 'categories.id')
    ->select('products.*', 'categories.name as category_name')
    ->get();
        return view('admin\products', ['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')->get();
        return view('admin\addproduct', ['categories' => $categories]);

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
        
        if ($product) {
            
           return redirect()->route('categories.index')->with('success', 'Product added successfully!');
       } else {
           return redirect()->back()->with('error', 'Error adding product.');
          
        }
    
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = DB::table('products')
        ->leftJoin(DB::raw('(SELECT product_id, MAX(bid_amount) as highest_bid FROM biddings GROUP BY product_id) as max_bids'), 
            'products.id', '=', 'max_bids.product_id')
        ->select(
            'products.*', 
            'max_bids.highest_bid',
            DB::raw("
                CASE 
                    WHEN DATEDIFF(products.bid_expiry, CURDATE()) > 0 
                        THEN CONCAT(DATEDIFF(products.bid_expiry, CURDATE()), ' days left')
                    WHEN DATEDIFF(products.bid_expiry, CURDATE()) = 0 
                        THEN CONCAT('Open until ', TIME_FORMAT(products.bid_expiry, '%H:%i'))
                    ELSE 'Expired'
                END as days_left")
        )
        ->where('products.id', $id)
        ->first();

    return view('user\productdetails', ['product' => $product]);
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
    public function search(Request $request)
{
    // Validate the search query
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $keyword = $request->input('name');
    $products = DB::table('products')
        ->where('name', 'like', '%' . $keyword . '%')
        ->get();

    $categories = DB::table('categories')->get();

    return view('user\index', ['products' => $products, 'categories' => $categories]);
}
}
