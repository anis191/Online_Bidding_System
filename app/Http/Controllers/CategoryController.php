<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexforadmin()
    {
        $categories=DB::table('categories')->get();
        //return view('categories.index_for_admins', ['categories' => $categories]);
    }
    public function indexforsusers()
    {
        $categories=DB::table('categories')->get();
    }
       //  return view('categories.index_for_users', ['categories' => $categories]);
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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $category = DB::table('categories')->insert([
            'name' => $validatedData['name'],
        ]);

        if($category)
        {
            echo '<h1>Category Added successfully!</h1>';
        }
        else
        {
            echo '<h1>Error!</h1>';
        }
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
