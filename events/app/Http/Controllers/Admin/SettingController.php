<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index(){
        return view('admin.setting.index');
    }
    public function layout_parameter(){
        return view('admin.setting.layout_parameter_seo');
    }
    public function checkout(){
        return view('admin.setting.checkout');
    }
    public function menu(){
        return view('admin.setting.menu');
    }
    public function payment(){
        return view('admin.setting.payment-fees');
    }
    public function googgle_recp(){
        return view('admin.setting.googgle_recaptcha');
    }
    public function google_maps(){
        return view('admin.setting.google_maps');
    }
    public function social_login(){
        return view('admin.setting.social_logins');
    }
    public function event_list(){
        return view('admin.setting.event_lists');
    }
    public function blog_setting(){
        return view('admin.setting.blog_setting');
    }
    public function new_letter(){
        return view('admin.setting.new_letters');
    }
}
