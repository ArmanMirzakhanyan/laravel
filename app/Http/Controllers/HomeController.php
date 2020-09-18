<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//class HomeController extends Controller
//{
//    public function index(){
//        $posts=['Post1','Post2'];
//        return view('home',['posts'=>$posts]);
//    }
//    public function show(){
//        $title=['Post1Title','Post2Title'];
//        return view('contact',['title'=>$title]);
//    }
//}
class HomeController extends Controller
{
    protected $posts = ['Post1','Post2'];
    public function  index(){
        $posts=['Post1','Post2'];
        return view('home',['posts'=>$posts]);
    }

    public function show($id){
        if(array_key_exists($id, $this->posts)){
            $posts = $this->posts;
            $post = $posts[$id];
        }else{
            $post = 'not found';
        }
        return view('posts.show',['post'=>$post]);
    }

    public function delete($id){
        if(array_key_exists($id, $this->posts)){
            unset($this->posts[$id]);
            $msg = 'deleted'.$id;
        }else{
            $msg = 'not found';
        }
        return view('post',['post'=>$msg]);
    }

}
