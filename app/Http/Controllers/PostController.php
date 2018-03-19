<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Comment;

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
            'content' => 'required|max:15000'
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
                ->get();

        return view('welcome', [
            'posts' => $posts
        ]);


    }

    public function getSpecificPost($id) {


        $request = request();

        $post = Post::where('posts.id', $id)->first();

        // $likes = $post->likes()->count();


        $liked = null;
        if ($post) {
            $liked = $post->isLikedByCurrentUser();
        }
        return view('post', [
            'post' => $post,
            'liked' => $liked
        ]);
    }

    public function like($id) {

        $request = request();

        if (!\Auth::check()) {
            return redirect('/login');
        }

        $user = $request->user();
        $post = Post::find($id);

        if ($post->isLikedByCurrentUser()) {
            $post->likes()->detach($user);
        } else {
            $post->likes()->attach($user);
        }

        return back()->with('message', 'You successfully liked a tweet.');


    }




}
