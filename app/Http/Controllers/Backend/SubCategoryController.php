<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::latest()->orderBy('id', 'DESC')->get();
        return view('admin.subcategory.index', compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::latest()->get();
        return view('admin.subcategory.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'category_id' =>'required',
            'name_en' => 'required|unique:categories',
            'name_ban' => 'required|unique:categories',
        ],
        [
            'category_id.required' => 'Select an Category'
        ]);

        $subcategory = new SubCategory();
        $subcategory->category_id = $request->category_id;
        $subcategory->name_en = Str::upper($request->name_en);
        $subcategory->name_ban = $request->name_ban;
        $subcategory->slug_en = Str::slug($request->name_en);
        $subcategory->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $subcategory->status = 1;

        $subcategory->save();

        $notification =  array(
            'message' => 'SubCategory Inserted Successfully',
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::latest()->get();
        $subcategory = SubCategory::findOrFail($id);
        return view('admin.subcategory.edit', compact('subcategory', 'categories'));
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

        $subcategory = SubCategory::findOrFail($id);
        $subcategory->category_id = $request->category_id;
        $subcategory->name_en = Str::upper($request->name_en);
        $subcategory->name_ban = $request->name_ban;
        $subcategory->slug_en = Str::slug($request->name_en);
        $subcategory->slug_ban = preg_replace('/\s+/', '-', $request->name_ban);
        $subcategory->status = 1;

        $subcategory->save();

        $notification =  array(
            'message' => 'SubCategory Update Successfully',
            'alert-type' => 'success',
        );

        return redirect()->route('subcategory.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $subcategories = SubCategory::findOrFail($id);
        $subcategories->product()->delete();
        $subcategories->delete();
        return back();
    }
}
