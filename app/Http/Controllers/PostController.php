<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index(Request $request){
//        $posts = DB::table('posts')->get();
//        foreach ($posts as $user) {
//            echo $user->title;
//            echo '<br>';
//        }
//        dd($posts);
        $posts=\App\Post::all();
        $names = $posts->reject(function ($user) {
            return 0;
        })
            ->map(function ($user) {

                return $user->title;
            });
// 表示是否包含这个主键
//        $data=$posts->contains(351);
//        表示查找某个的数据集合主键为准
//        $data=$posts->find(351);
//        表示除了某个以外的所有
//        $data=$posts->except([351, 2, 3]);
//        仅返回主键为351的数据
//        $data=$posts->only([351, 2, 3]);


//        dd($data);
//        dd($names);
        $data=$posts->fresh('users','comments')->only([351, 2, 3]);
        return $data->toJson();
    }
    public function login(){
        return view('admin.login.login');
    }
    public function home(){
        return view('admin.home.index');
    }
}
