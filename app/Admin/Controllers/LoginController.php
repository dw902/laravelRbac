<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login.login');
    }

    /*
     * 具体登陆
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:2',
            'password' => 'required|min:6|max:30',
            'is_remember' => '',
        ]);
        $remember = boolval(request('is_remember'));
        $user = request(['name', 'password']);
        if (true == \Auth::guard('admin')->attempt($user,$remember)) {
            return redirect('/admin/home');
        }

        return \Redirect::back()->withErrors("用户名密码不匹配");
    }

    /*
     * 登出操作
     */
    public function logout()
    {
        \Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }


}
