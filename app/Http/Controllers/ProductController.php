<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
                    ->join('categories', 'categories.cat_id', '=', 'products.product_category')
                    ->get();
        
        return view("admin/products", ["products" => $products]);
    }
    
    public function add()
    {
        $categories = Category::all();
        return view("admin/add_product", ["categories" => $categories]);
    }

    public function edit_product(Product $product)
    {
        $categories = Category::all();
        return view("admin/edit_product", ["product" => $product, "categories" => $categories]);
    }

    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $post_data = $request->all();

        $product =  Product::create([
            "product_name" => $post_data["name"],
            "product_category" => $post_data["category"],
            "product_description" => $post_data["description"],
            "product_price" => $post_data["price"],
        ]);
        $request->session()->flash('status', 'Product created successfully!');
    	return redirect(url("admin/add_product"));
    }

    public function edit(Request $request, Product $product)
    {   
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $post_data = $request->all();

        $product->update([
            "product_name" => $post_data["name"],
            "product_category" => $post_data["category"],
            "product_description" => $post_data["description"],
            "product_price" => $post_data["price"],
        ]);
        $request->session()->flash('status', 'Product updated successfully!');
    	return redirect(url("admin/edit_product/".$product->id));
    }

    public function delete(Request $request, Product $product)
    {
    	
    	$product->delete();

    	return redirect(url('admin/products'));
    }
}
