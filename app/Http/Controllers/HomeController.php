<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Auth;
use App\Http\Requests\StoreBlogPostRequest;
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
    public function massive()
    {
         echo date("H:i:s");
         $massive = [];
         for ($i=0; $i < 2; $i++) {
                $massive[$i] = rand(1,2);
            }

        //dump($massive);
            echo " ";
        for ($i=0; $i < count($massive)-1; $i++) {
            if ($massive[$i]>$massive[$i+1]) {
                $t = $massive[$i];
                $massive[$i] = $massive[$i+1];
                $massive[$i+1] = $t;
                if ($i) {
                    $i-=2;
                }
           }
        }
        dump($massive);
        echo date("H:i:s");
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();

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
    public function addpost(StoreBlogPostRequest $request)
    {
        $post = new Post;
        $post->title = $request->get('title');
        $post->text = $request->get('text');
        $post->img = 'src';
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('posts');
    }
}
