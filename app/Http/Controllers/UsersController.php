<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    // 创建用户的页面
    public function create()
    {
        return view('users.create');
    }

    // 显示用户个人信息的页面
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
}
