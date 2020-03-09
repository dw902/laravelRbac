<?php

namespace App;

use \App\Model;

class Comment extends Model
{
    //
    protected $table = "comments";
    //一个文章对应多条评论，为一对多的关系此处定义的为1对多的反向

    public function post()
    {
        return $this->belongsTo('\App\Post', 'post_id', 'id');
    }
//一个用户对应多条评论此处为1对多的反向
    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id', 'id');
    }
}
