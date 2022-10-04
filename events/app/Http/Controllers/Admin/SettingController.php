<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting.index');
    }
    public function checkout(){
        return view('admin.setting.checkout');
    }
    public function menu(){
        return view('admin.setting.menu');
    }
}
