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



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = Post::with('user')->latest()->get();
        
        return view('folderPosts.posts',['posts'=>$posts]);
    }

    public function post_view($id)
    {
        $post = Post::with('user')->where('id',$id)->get();
        if ($post->toArray()) {
            return view('folderPosts.id_posts',['post'=>$post]);
        } else {
            abort(404);
        }
    }

    public function newpost()
    {
        return view('folderPosts.add_post');
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
