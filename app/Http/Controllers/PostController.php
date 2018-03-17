<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;

class PostController extends Controller
{

	public function create()
    
    {
        if (!\Auth::check()) {
            return redirect('/login');
        }

        return view('postform');
    }

    public function store()
    {
        
        $request = request();

        if (!\Auth::check()) {
            return redirect('/login');
        }

        $result = $request->validate([
            'title' => 'required|max:255',
            'img' => 'required',
            'content' => 'required'
        ], [
        ]);


        $user = $request->user();
        $data = $request->all();

        $post = new Post();
        $post->title = $data['title'];
        $post->img = $data['img'];
        $post->content = $data['content'];
        $post->user_id = $user->id;
        $post->save();

        return back()->with('message', 'You successfully made a post.');
    }

    public function getRecentPosts() {

        $request = request();

        $posts = Post::orderBy('created_at', 'DESC')
                ->take(10)
                ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                ->select('posts.*', 'users.name')
                ->get();


        if (count($posts) > 8) {
            return view('welcome', [
                'posts' => $posts
            ]);   
        } else {
            return view('layout');
        }


    }

    public function getSpecificPost($id) {


        $request = request();

        $post = Post::where('posts.id', $id)
                ->leftJoin('users', 'users.id', '=', 'posts.user_id')
                ->select('posts.*', 'users.name')
                ->first();

        return view('post', [
            'post' => $post
        ]);
    }


}
