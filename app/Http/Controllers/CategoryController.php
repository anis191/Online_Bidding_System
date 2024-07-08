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
        // return view('categories.create');
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
        $category = DB::table('categories')->find($id);
        return view('categories.edit', ['category' => $category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $updated = DB::table('categories')
                    ->where('id', $id)
                    ->update([
                        'name' => $request->name,
                        'updated_at' => now(),
                    ]);
    
        //if ($updated) {
            //return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
        //} else {
            //return redirect()->back()->with('error', 'Error updating category.');
        //}
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleted = DB::table('categories')->where('id', $id)->delete();

    //if ($deleted) {
        //return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    //} else {
        //return redirect()->back()->with('error', 'Error deleting category.');
   // }
    }
}

