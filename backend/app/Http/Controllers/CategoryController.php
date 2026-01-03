<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return Category::all();
    }

    public function show($slug)
    {
        return Category::where('slug', $slug)->with('products')->firstOrFail();
    }
}
