<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('user')->get();

        foreach ($posts as $post) {
            echo $post->user->name;
        }
        
        return view('posts',['posts'=>$posts]);
        /*

        foreach ($posts as $post) {
            echo $post->user->name;
        }

        $posts = $user->posts()->get();
        foreach ($posts as $post) {
            dump($post->title.' -- '.$user->login);
        }*/
        //echo ;
        //dump($posts);
    }
}
