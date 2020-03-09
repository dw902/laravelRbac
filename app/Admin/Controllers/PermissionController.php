<?php

namespace App\Admin\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /*
     * 用户列表
     */
    public function index()
    {
        $permissions = \App\AdminPermission::paginate(10);
        return view('/admin/permission/index', compact('permissions'));
    }

    /*
     * 创建用户
     */
    public function create()
    {
        return view('/admin/permission/add');
    }
//   删除权限
    public  function delete(\App\AdminPermission $permission){
//        dd($permission->name);
        if($permission->name=='system'){
            return view('admin.error.index');
        }


//        $roleid=$permission->roles();
//        dd($roleid);
        $permission->delperm();
        return redirect('/admin/permissions');
    }
    /*
     * 创建用户
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:3',
            'description' => 'required'
        ]);

        \App\AdminPermission::create(request(['name', 'description']));
        return redirect('/admin/permissions');
    }
}
