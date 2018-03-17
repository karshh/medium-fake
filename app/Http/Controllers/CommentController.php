<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentController extends Controller
{
	public function store() {


        if (!\Auth::check()) {
            return redirect('/login');
        }

        $request = request();
        $user = $request->user();
        $data = $request->all();

        $comment = new Comment();
        $comment->user_id = $user->id;
        $comment->post_id = $data['post_id'];
        $comment->content = $data['comment'];
        // dd($comment);
        $comment->save();

        return back()->with('message', 'success.');

	}

}
