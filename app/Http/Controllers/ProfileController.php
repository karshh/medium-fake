<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{

	public function getUser($id)
    
    {

        $user = User::where('id', $id)->first();

        return view('profile', [
        		'user' => $user
        ]);
    }

}
