<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    // Validate the request
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'bid_amount' => 'required|numeric|min:0.01',
    ]);

    // Ensure bid is greater than the current highest bid if there is one
    $highestBid = DB::table('biddings')
        ->where('product_id', $request->product_id)
        ->max('bid_amount');

    if ($highestBid !== null && $request->bid_amount <= $highestBid) {
        return redirect()->back()->with('error', 'Your bid must be higher than the current highest bid.');
    }

    // Store the bid
    DB::table('biddings')->insert([
        'user_id' => Auth::id(), // Assuming user is logged in
        'product_id' => $request->product_id,
        'bid_amount' => $request->bid_amount,
       
    ]);

    return redirect()->route('user\productdetails', ['id' => $request->product_id])->with('success', 'Bid placed successfully.');
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
