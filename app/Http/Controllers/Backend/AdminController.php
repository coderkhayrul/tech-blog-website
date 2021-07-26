<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        return view('admin.setting.index');
    }
}
