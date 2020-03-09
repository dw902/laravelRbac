<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
//        $users = \App\AdminUser::paginate(10);
        $users = \App\AdminUser::all();
        return view('/admin/user/index', compact('users'));
    }

    /*
     * 创建用户
     */
    public function create()
    {
        return view('/admin/user/add');
    }
//   删除用户
    public  function delete(\App\AdminUser $user){
        if($user->name=='wudong'){
            return view('admin.error.index');
        }
     $user->deluser();
        return redirect('/admin/users');
    }
    /*
     * 创建用户
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'password' => 'required'
        ]);

        $name = request('name');
        $password = bcrypt(request('password'));
        \App\AdminUser::create(compact('name', 'password'));
        return redirect('/admin/users');
    }

    /*
     * 角色的权限
     */
    public function role(\App\AdminUser $user)
    {
        $roles = \App\AdminRole::all();
        $myRoles = $user->roles;
        return view('/admin/user/role', compact('roles', 'myRoles', 'user'));
    }

    /*
     * 保存角色
     */
    public function storeRole(\App\AdminUser $user)
    {
        $this->validate(request(),[
            'roles' => 'required|array'
        ]);

        $roles = \App\AdminRole::find(request('roles'));
        $myRoles = $user->roles;

        // 对已经有的权限 使用差集计算，出要增加的
        $addRoles = $roles->diff($myRoles);
        foreach ($addRoles as $role) {
            $user->roles()->save($role);
        }
//差集 需要删除的内容
        $deleteRoles = $myRoles->diff($roles);
        foreach ($deleteRoles as $role) {
            $user->deleteRole($role);
        }
//        return back();
        return redirect('/admin/users');
    }
}
