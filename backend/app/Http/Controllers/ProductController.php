<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return Product::with('category')->where('status', true)->get();
    }

    public function show($slug)
    {
        return Product::with('category')->where('slug', $slug)->firstOrFail();
    }
}
 