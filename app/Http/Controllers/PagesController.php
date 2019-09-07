<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use App\Post;
use App\Project;

class PagesController extends Controller
{
    function index() {
    	$title = 'Welcome';
        $post = Post::inRandomOrder()->get()->first();
        $project = Project::inRandomOrder()->get()->first();
    	return view('pages.index', compact('title', 'post', 'project'));
    }

    function blog() {
    	$title = 'Blog';
    	return view('pages.blog')->with('title', $title);
    }

    function about() {
    	$title = 'About me';
    	return view('pages.about')->with('title', $title);
    }

    function contact() {
    	$title = 'Contact';
    	return view('pages.contact')->with('title', $title);
    }

    function email(Request $request) {

        $email = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ];

        Mail::send(new ContactEmail($email));
        return back()->with('success', 'Thanks for contacting us!');
    }

}
