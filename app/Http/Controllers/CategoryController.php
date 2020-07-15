<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{   
    /**
     * Get All Categories
     *
     * @param  none
     * @return view()
     */
    public function index()
    {
        $categories = Category::all();
        return view("admin/categories", ["categories" => $categories]);
    }
    
    /**
     * Create an new Category
     *
     * @param  none
     * @return view()
     */
    public function add()
    {
        return view("admin/add_category");
    }

    /**
     * Insert a New Category
     *
     * @param  Illuminate\Http\Request  $request
     * @return redirect()
     */
    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'name' => 'required',
            
        ]);

        $category =  Category::create(["cat_name" => $request->input('name')]);
        $request->session()->flash('status', 'Category created successfully!');
    	return redirect(url("admin/add_category"));
    }
}
