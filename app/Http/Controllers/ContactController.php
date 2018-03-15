<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
	public function create()
    
    {
        return view('contactform');
    }

    public function store()
    {
        
        $request = request();

        $result = $request->validate([
            'name' => 'required|max:1000',
            'email' => 'required|max:1000',
            'title' => 'required|max:1000',
            'message' => 'required|max:1000'
        ], [
        ]);

        $data = $request->all();

        $contact = new Contact();
        
        $contact->name = $data['name'];
        $contact->email = $data['email'];
        $contact->title = $data['title'];
        $contact->message = $data['message'];
        $contact->save();

        return back()->with('message', 'We have received your message, and will get back to you shortly.');
    }
}
