<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;

class ProductController extends Controller
{
    /**
     * Get All Products or view search results
     *
     * @param  Illuminate\Http\Request  $request
     * @return view()
     */
    public function index(Request $request)
    {

        // Another way to join the categories is to
        // use Eloquent relationship, here i 
        // could have created a One to Many Relationship b/w
        // Product and Category models, since each category can
        // have multiple product, but each product has only one
        // category

        if($request->has('query')) {
            $query = $request->input("query");
            $products = DB::table('products')
            ->join('categories', 'categories.cat_id', '=', 'products.product_category')
            ->where('products.product_name', 'like', '%' . $query . '%')
            ->paginate(10); 
        } else {
            $products = DB::table('products')
                    ->join('categories', 'categories.cat_id', '=', 'products.product_category')
                    ->paginate(10);
        }
        
        
        return view("admin/products", ["products" => $products]);
    }
    
    /**
     * Add Product Page
     *
     * @param  none
     * @return view()
     */
    public function add()
    {
        $categories = Category::all();
        return view("admin/add_product", ["categories" => $categories]);
    }

    /**
     * Edit product page
     *
     * @param  Illuminate\Http\Request  $request
     * @return view()
     */
    public function edit_product(Product $product)
    {
        $categories = Category::all();
        return view("admin/edit_product", ["product" => $product, "categories" => $categories]);
    }

    /**
     * Insert a New Product
     *
     * @param  Illuminate\Http\Request  $request
     * @return redirect()
     */
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

    /**
     * Edits A product
     *
     * @param  Illuminate\Http\Request  $request, App\Product $product
     * @return redirect()
     */
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

    /**
     * Deletes a product
     *
     * @param  Illuminate\Http\Request  $request, App\Product $product
     * @return redirect()
     */
    public function delete(Request $request, Product $product)
    {
    	
    	$product->delete();

    	return redirect(url('admin/products'));
    }
}
