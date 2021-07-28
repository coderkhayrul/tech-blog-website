<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    public function Index()
    {

        $categories = Category::latest()->orderBy('id', 'DESC')->get();

        return view('admin.categories.index', compact('categories'));
    }

    public function Create()
    {
        return view('admin.categories.create');
    }

    public function Store(Request $request)
    {

        $this->validate($request, [
            'image' => 'required|image|mimes:,jpg,png,jpeg',
            'name_en' => 'required|unique:categories',
            'name_ban' => 'required|unique:categories',
        ]);

        $image = $request->file('image');
        $name_generated = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(770, 294)->save('upload/categories/' . $name_generated);
        $save_url_image = 'upload/categories/' . $name_generated;

        $category = new Category();
        $category->name_en = Str::upper($request->name_en);
        $category->name_ban = $request->name_ban;
        $category->description_en = $request->description_en;
        $category->description_ban = $request->description_ban;
        $category->slug_en = Str::slug($request->name_en);
        $category->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $category->image = $save_url_image;
        $category->status = 1;

        $category->save();

        $notification =  array(
            'message' => 'Category Inserted Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function Edit(Category $category)
    {

        return view('admin.categories.edit', compact('category'));
    }

    public function Update(Request $request, $category)
    {
        $old_image = $request->old_image;

        if ($request->image == NULL) {
            $category = Category::findOrFail($category);
            $category->name_en = Str::upper($request->name_en);
            $category->name_ban = $request->name_ban;
            $category->description_en = $request->description_en;
            $category->description_ban = $request->description_ban;
            $category->slug_en = Str::slug($request->name_en);
            $category->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
            $category->update();

            $notification =  array(
                'message' => 'Category Update Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('category.index')->with($notification);
        } else {
            // Thambnail Image
            $image = $request->file('image');
            $make_name = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            if ($old_image) {
                unlink($old_image);
            }
            Image::make($image)->resize(770, 294)->save('upload/categories/' . $make_name);
            $upload_image = 'upload/categories/' . $make_name;

            $category = Category::findOrFail($category);
            $category->name_en = Str::upper($request->name_en);
            $category->name_ban = $request->name_ban;
            $category->description_en = $request->description_en;
            $category->description_ban = $request->description_ban;
            $category->slug_en = Str::slug($request->name_en);
            $category->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
            $category->image = $upload_image;
            $category->update();

            $notification =  array(
                'message' => 'Category Update With Image Successfully',
                'alert-type' => 'success',
            );

            return redirect()->route('category.index')->with($notification);
        }
    }

    public function Destroy(Category $category)
    {
        $category->product()->delete();
        unlink($category->image);
        $category->delete();

        $notification =  array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }
}
