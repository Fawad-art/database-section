<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Post;

class PostsController extends Controller
{
    public function dbCheck(){
        //$post=DB::select('select * from posts');
        //print_r($post);

      //  $post=DB::table('posts')->get();
        //print_r($post);

        $post=DB::table('posts')->find(4);
        
        print_r($post);

    }

    public function index(){
        return Post::all();
    }
}
