<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
    //首页
    public function index()
    {
        return view('admin/static_pages/index');
    }

    //帮助页
    public function help()
    {
        return view('admin/static_pages/help');
    }

    //关于
    public function about()
    {
        return view('admin/static_pages/about');
    }
}
