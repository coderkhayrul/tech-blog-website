<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    // ALL POST SHOW  HOME PAGE
    public function index()
    {
        $posts = Product::where('status', 1)->latest()->orderBy('id', 'DESC')->limit(10)->get();

        // Category Wise Product Show (PC & MOBILE)
        $skip_category = Category::skip(6)->first();
        $skip_products = Product::where('status', 1)
            ->where('category_id', $skip_category->id)
            ->orderBy('id', 'DESC')->limit(4)->get();


        return view('frontend.index', compact('posts', 'skip_products'));
    }

    // SINGLE POST SHOW
    public function postShow($slug)
    {
        $post = Product::where('status', 1)->where('slug_en', $slug)->first();

        $allposts = Product::where('status', 1)->latest()->orderBy('id', 'DESC')->limit(4)->get();

        $previous = Product::where('status', 1)->where('id', '<', $post->id)->first();
        $next = Product::where('status', 1)->where('id', '>', $post->id)->first();

        return view('frontend.show', compact('post', 'allposts', 'previous', 'next'));
    }


    public function previousProduct($id, $slug)
    {
        $previous = Product::where('status', 1)->where('id', '<', $id)->first();

        return view('frontend.show', compact('previous'));
    }

    public function nextProduct($id, $slug)
    {
        $next = Product::where('status', 1)->where('id', '>', $id)->first();

        return view('frontend.show', compact('next'));
    }



    // CATEGORY WISE POST SHOW
    public function categoryPostAll($id, $slug)
    {
        $productByCategory = Product::where('status', 1)->where('category_id', $id)->orderBy('id', 'DESC')->get();
        $category = Category::where('status', 1)->where('id', $id)->orderBy('id', 'DESC')->first();

        return view('frontend.category_wise', compact('productByCategory', 'category'));
    }
}
