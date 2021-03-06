<?php

namespace App;

class AdminPermission extends Model
{
    /*
     * 权限属于哪些角色
     */
    public function roles()
    {
        return $this->belongsToMany(\App\AdminRole::class, 'admin_permission_role', 'role_id', 'permission_id')->withPivot(['permission_id', 'role_id']);
    }
//    删除权限
    public function delperm(){
        $this->roles()->detach();
        $this->delete();
//        return ($this->roles()->delete()&&$this->delete());
    }
}
