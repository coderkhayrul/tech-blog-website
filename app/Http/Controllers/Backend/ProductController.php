<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->orderBy('id', 'DESC')->get();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->orderBy('id', 'DESC')->get();
        $subcategories = SubCategory::latest()->orderBy('id', 'DESC')->get();
        return view('admin.product.create', compact('categories', 'subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('thambnail_image');
        $name_generated = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(371, 221)->save('upload/products/'.$name_generated);
        $save_url_thambnail = 'upload/products/'.$name_generated;

        $imagebanner = $request->file('banner_image');
        $name_generated = hexdec(uniqid()).'.'.$imagebanner->getClientOriginalExtension();
        Image::make($imagebanner)->resize(770, 294)->save('upload/products/'.$name_generated);
        $save_url_banner = 'upload/products/'.$name_generated;

        $product = new Product();
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->name_en = $request->name_en;
        $product->name_ban = $request->name_ban;
        $product->slug_en = Str::slug($request->name_en);
        $product->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $product->short_description_en = $request->short_description_en;
        $product->short_description_ban = $request->short_description_ban;
        $product->long_description_en = $request->long_description_en;
        $product->long_description_ban = $request->long_description_ban;
        $product->status = 1;

        $product->thambnail_image = $save_url_thambnail;
        $product->banner_image = $save_url_banner;

        $product->save();

        $notification =  array(
            'message' => 'Product Inserted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('admin.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::latest()->orderBy('id', 'DESC')->get();
        $subcategories = SubCategory::latest()->orderBy('id', 'DESC')->get();
        $product = Product::findOrFail($id);
        return view('admin.product.edit', compact('product', 'subcategories', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // Update Product
        $product = Product::findOrFail($id);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->name_en = $request->name_en;
        $product->name_ban = $request->name_ban;
        $product->slug_en = Str::slug($request->name_en);
        $product->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $product->short_description_en = $request->short_description_en;
        $product->short_description_ban = $request->short_description_ban;
        $product->long_description_en = $request->long_description_en;
        $product->long_description_ban = $request->long_description_ban;
        $product->status = 1;

        $product->update();

        $notification =  array(
            'message' => 'Product Update Successfully',
            'alert-type' => 'info',
        );
        return redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        unlink($product->thambnail_image);
        unlink($product->banner_image);
        $product->delete();

        $notification =  array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);
    }


    public function GetSubCategory($category_id) {
        $subcategory = SubCategory::where('category_id', $category_id )->orderBy('name_en', 'ASC')->get();
        return json_encode($subcategory);
    }



    public function productImageUpdate(Request $request, $id){

        $old_thambnail_image = $request->old_thambnail_image;
        $old_banner_image = $request->old_banner_image;

        // Thambnail Image
        $thambnail_image = $request->file('thambnail_image');
        $make_name = hexdec(uniqid()).'.'.$thambnail_image->getClientOriginalExtension();
        if ($old_thambnail_image) {
            unlink($old_thambnail_image);
        }
        Image::make($thambnail_image)->resize(371, 221)->save('upload/products/'.$make_name);
        $upload_thambnail_image = 'upload/products/'.$make_name;

        // Banner Image
        $banner_image = $request->file('banner_image');
        $make_name_banner = hexdec(uniqid()).'.'.$banner_image->getClientOriginalExtension();
        if ($old_banner_image) {
            unlink($old_banner_image);
        }
        Image::make($banner_image)->resize(770, 394)->save('upload/products/'.$make_name_banner);
        $upload_banner_image = 'upload/products/'.$make_name_banner;

        Product::findOrFail($id)->update([
            'thambnail_image' => $upload_thambnail_image,
            'banner_image' => $upload_banner_image,
            'updated_at' => Carbon::now(),
        ]);

        $notification =  array(
            'message' => 'Product Image Updated Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);

    }
}