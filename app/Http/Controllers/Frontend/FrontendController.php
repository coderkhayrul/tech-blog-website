<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts = Product::latest()->orderBy('id', 'DESC')->limit(10)->get();

        return view('frontend.index', compact('posts'));
    }

    public function postShow($slug)
    {
        $post = Product::where('slug_en', $slug)->first();

        return view('frontend.show', compact('post'));
    }
}
