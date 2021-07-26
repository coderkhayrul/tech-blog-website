<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function adminLogout(){
        Auth::logout();
        return redirect()->route('login');
    }

    public function setting(){

        $setting = Admin::find(1)->first();

        return view('admin.setting.index', compact('setting'));
    }

    public function settingUpdate(Request $request, $id){

        $old_fav_icon = $request->old_fav_icon;
        $old_title_image = $request->old_title_image;

        // FAV ICON Image
        $fav_icon = $request->file('fav_icon');
        $make_name = hexdec(uniqid()).'.'.$fav_icon->getClientOriginalExtension();
        if ($old_fav_icon) {
            unlink($old_fav_icon);
        }
        Image::make($fav_icon)->resize(16, 16)->save('upload/setting/image/'.$make_name);
        $upload_fav_icon = 'upload/setting/image/'.$make_name;

        // TITLE Image
        $title_image = $request->file('title_image');
        $make_name_title = hexdec(uniqid()).'.'.$title_image->getClientOriginalExtension();
        if ($old_title_image) {
            unlink($old_title_image);
        }
        Image::make($title_image)->resize(193, 45)->save('upload/setting/image/'.$make_name_title);
        $upload_title_image = 'upload/setting/image/'.$make_name_title;


        $setting = Admin::findOrFail($id);
        $setting->website_title_en = $request->website_title_en;
        $setting->website_title_ban = $request->website_title_ban;
        $setting->copyright_text_en = $request->copyright_text_en;
        $setting->copyright_text_ban = $request->copyright_text_ban;
        $setting->fav_icon = $upload_fav_icon;
        $setting->title_image = $upload_title_image;

        $setting->update();

        $notification =  array(
            'message' => 'Setting Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('setting.index')->with($notification);
    }

    public function settingSocial(){

        $setting = Admin::find(1)->first();

        return view('admin.setting.social', compact('setting'));
    }

    public function settingSocialUpdate(Request $request, $id){

        $social = Admin::findOrFail($id);
        $social->facebook_url = $request->facebook_url;
        $social->youtube_url = $request->youtube_url;
        $social->twitter_url = $request->twitter_url;
        $social->pinterest_url = $request->pinterest_url;
        $social->update();

        $notification =  array(
            'message' => 'Social Settings Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->back()->with($notification);
    }

    public function settingContact(){
        return view('admin.setting.contact');
    }

    public function settingSeo(){
        return view('admin.setting.seo');
    }


}
