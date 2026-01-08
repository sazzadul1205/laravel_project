<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Product::all();
        // dd($prods);
        return view('backend.product.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Category::all();
        return view('backend.product.create', compact('cat'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation
        $request->validate([
            'prod_name' => 'required|max:50|min:3',
            'prod_sku' => 'required|unique:products,sku',
            'prod_stock' => 'required',
            'prod_details' => 'min:3|max:200',
            'prod_price' => 'required|numeric',
            'prod_category' => 'required',
            'prod_image' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $default_prod_image = '';

        // Imnage Upload
        if ($request->prod_image == null) {
            $default_prod_image = 'images\noImage.jpg';
        } else {
            $default_prod_image = request()->prod_image->move('images', $request->prod_image->getClientOriginalName());
        }

        // Category Array
        $product = [
            'name' => $request->prod_name,
            'sku' => $request->prod_sku,
            'stock' => $request->prod_stock,
            'details' => $request->prod_details,
            'price' => $request->prod_price,
            'category_id' => $request->prod_category,
            'image' => $default_prod_image,

        ];

        Product::create($product);

        return redirect('/product')->with('success', 'Product Created Successfully');
        // return redirect()->route('category.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {


        if ($product->image == 'images\noImage.jpg') {
            $product->delete();
            return redirect("/product")->with("success", "Successfully Deleted $product->name");
        } else {
            $image_path = public_path($product->image);
            unlink($image_path);

            $product->delete();
            return redirect("/product")->with("success", "Successfully Deleted $product->name");
        }
    }
}
