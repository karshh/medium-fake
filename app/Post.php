<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Comment;

class Post extends Model
{
    public $table = 'posts';
	public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function likes()
    {
        return $this->belongsToMany(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'comment_id');
    }

    public function isLikedByCurrentUser()
    {
        $currentUser = request()->user();

        return $this
            ->likes
            ->contains($currentUser);
    }

}
