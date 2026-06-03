<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
   
    public function index()
    {
        $setting = Setting::first();
        $categories = Category::where('status', 1)->get();
        $recentProducts = Product::where('status', 1)->latest()->take(8)->get();

        return view('front.home', compact('setting', 'categories', 'recentProducts'));
    }
}
