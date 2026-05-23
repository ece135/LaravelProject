<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    public function index()
    {   
        $title = "Admin Home Sub Page";
        $message = "Welcome to Admin Panel";
        return view('admin.categories.index', compact('title', 'message'));
    }
}   