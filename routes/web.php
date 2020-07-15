<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get("/logout", "Auth\LoginController@logout");

Route::get('/home', 'HomeController@index')->name('home');

// Admin Panel Routes
Route::prefix('admin')->middleware(['auth', 'admin_check'])->group(function () {


    Route::get("/", function () {
        return view("admin/dashboard");
    });

    // Category Routes
    Route::get("/categories", "CategoryController@index");
    Route::get("/add_category", "CategoryController@add");
    Route::post("/categories", "CategoryController@store");

    // Product Routes
    Route::get("/products", "ProductController@index");
    Route::get("/add_product", "ProductController@add");
    Route::post("/products", "ProductController@store");
    Route::put("/products/{product}", "ProductController@edit");
    Route::get("/delete_product/{product}", "ProductController@delete");
    Route::get("/edit_product/{product}", "ProductController@edit_product");

    // Employee Routes
    Route::get("/employees", "EmployeeController@index");
    Route::get("/add_employee", "EmployeeController@add");
    Route::post("/employees", "EmployeeController@store");
    Route::get("/add_employee_csv", "EmployeeController@add_csv");
    Route::post("/employees_csv", "EmployeeController@store_csv");

    // Alphabetical Looper
    Route::get("/make_loop", "LooperController@index");
    Route::post("/print_loop", "LooperController@loop_it");

});
