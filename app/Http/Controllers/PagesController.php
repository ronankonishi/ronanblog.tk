<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

}