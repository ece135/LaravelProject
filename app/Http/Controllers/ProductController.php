<?php

namespace App\Http\Controllers;

use App\Models\Category; 
use App\Models\Product;  
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('admin.products.index');
    }

    public function create()
    {
        $categories = Category::all();
        
        return view('admin.products.create', compact('categories'));
    }
}
