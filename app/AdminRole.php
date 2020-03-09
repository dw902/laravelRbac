<?php

namespace App;


class AdminRole extends Model
{
    protected $table = "admin_roles";

    /*
     * 当前角色的所有权限
     */
    public function permissions()
    {
        return $this->belongsToMany(\App\AdminPermission::class, 'admin_permission_role', 'permission_id', 'role_id')->withPivot(['permission_id', 'role_id']);
    }
//角色对用户关系
//
  public function users()
    {
        return $this->belongsToMany(\App\AdminUser::class, 'admin_role_user', 'user_id', 'role_id')->withPivot(['user_id', 'role_id']);
    }
//    删除角色
    public function deleteg()
    {
        $this->users()->detach();
        $this->delete();
    }

    /*
     * 给角色授权
     */
    public function grantPermission($permission)
    {
        return $this->permissions()->save($permission);
    }

    /*
     * 删除role和permission的关联
     */
    public function deletePermission($permission)
    {
        return $this->permissions()->detach($permission);
    }

    /*
     * 角色是否有权限
     */
    public function hasPermission($permission)
    {
//        使用包含方便
        return $this->permissions->contains($permission);
    }

}
