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

        $setting = Admin::findOrFail($id);
        $setting->website_title_en = $request->website_title_en;
        $setting->website_title_ban = $request->website_title_ban;
        $setting->copyright_text_en = $request->copyright_text_en;
        $setting->copyright_text_ban = $request->copyright_text_ban;

        $setting->update();

        $notification =  array(
            'message' => 'Setting Update Successfully',
            'alert-type' => 'info',
        );

        return redirect()->route('setting.index')->with($notification);
    }

    public function settingSocial(){
        return view('admin.setting.social');
    }

    public function settingContact(){
        return view('admin.setting.contact');
    }

    public function settingSeo(){
        return view('admin.setting.seo');
    }
}
