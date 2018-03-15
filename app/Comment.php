<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $table = 'comments';
    
	public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function likes()
    {
        return $this->belongsToMany(User::class);
    }

    public function isLikedByCurrentUser()
    {
        $currentUser = request()->user();

        return $this
            ->likes
            ->contains($currentUser);
    }
}


