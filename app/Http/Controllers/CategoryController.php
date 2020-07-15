<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("admin/categories", ["categories" => $categories]);
    }
    
    public function add()
    {
        return view("admin/add_category");
    }

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
