<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    //用户注册页面
    public function create()
    {
        return view('admin.users.create');
    }
}
