<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cats = DB::table("categories")->get();
        // $cats = Category::all();
        // dd($cats);
        return view('backend.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'cat_name' => 'required|max:100|min:3|unique:categories,name',
        ], [
            'cat_name.required' => 'Category Name is required',
            'cat_name.max' => 'Category Name must be less than 100 characters',
            'cat_name.min' => 'Category Name must be at least 3 characters',
            'cat_name.unique' => 'Category Name already exists',
        ]);


        // Category Array
        $category = [
            'name' => $request->cat_name,
        ];

        Category::create($category);

        return redirect('/category')->with('success', 'Category Created Successfully');
        // return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'cat_name' => 'required|max:100|min:3|unique:categories,name,' . $category->id,
        ], [
            'cat_name.required' => 'Category Name is required',
            'cat_name.max' => 'Category Name must be less than 100 characters',
            'cat_name.min' => 'Category Name must be at least 3 characters',
            'cat_name.unique' => 'Category Name already exists',
        ]);
        $data = [
            "name" => $request->cat_name,
        ];
        $category->update($data);
        return redirect('/category')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //    return "DELETED";
        $category->delete();
        return redirect("/category")->with("success", "Successfully Deleted $category->name");
    }
}
