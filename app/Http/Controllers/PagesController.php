<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;


class PagesController extends Controller
{
    function index() {
    	$title = 'Welcome';
    	return view('pages.index')->with('title', $title);
    }

    function blog() {
    	$title = 'Blog';
    	return view('pages.blog')->with('title', $title);
    }

    function about() {
    	$title = 'About me';
    	return view('pages.about')->with('title', $title);
    }

    function portfolio() {
    	$title = 'Portfolio';
    	return view('pages.portfolio')->with('title', $title);
    }

    function contact() {
    	$title = 'Contact';
    	return view('pages.contact')->with('title', $title);
    }

    function projects() {
        $title = 'Projects';
        return view('pages.blog.projects')->with('title', $title);
    }

    function academia() {
        $title = 'Academia';
        return view('pages.blog.academia')->with('title', $title);
    }

    function fitness() {
        $title = 'Fitness';
        return view('pages.blog.fitness')->with('title', $title);
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
