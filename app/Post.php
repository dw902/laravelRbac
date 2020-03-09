<?php

namespace App;

use \App\Model;

class Post extends Model
{
    //定义对应的表名为posts
    protected $table = "posts";
    /*
  * 所有评论，一个文章有多条的评论
  */
//    隐藏json属性
//    protected $hidden = ['password'];
    public function comments()
    {
        return $this->hasMany('\App\Comment')->orderBy('created_at', 'desc');
    }
    /*
 * 作者一对多的方向
 */
    public function users()
    {
        return $this->belongsTo(\App\User::class, 'user_id', 'id');
    }


}
