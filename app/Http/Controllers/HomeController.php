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

        return view('posts',['posts'=>$posts]);
    }
    public function post_view($id)
    {    
        $post = Post::with('user')->where('id',$id)->get();
        if ($post->toArray()) {
            return view('id_posts',['post'=>$post]);
        } else {
            abort(404);  
        }  
    }
    public function newpost()
    {
        return view('new.post');
    }
    public function addpost(Request $request)
    {
        dump($request);
        return 1;
    }
}
