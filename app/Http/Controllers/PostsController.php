<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Blog';
        $posts_per_page = 5; // pagination
        $posts = Post::orderBy('created_at', 'desc')->paginate($posts_per_page);
        return view('posts.index', compact('posts', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image_attachment' => 'image|nullable|max:1999'
        ]);

        //Handle File Uploading
        if($request->hasFile('image_attachment')) {
            // Get filename w/ extension
            $filenameWithExt = $request->file('image_attachment')->getClientOriginalName();

            // Get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get ext
            $extension = $request->file('image_attachment')->getClientOriginalExtension();

            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload img
            $path = $request->file('image_attachment')->storeAs('public/image_attachments', $filenameToStore);

        } else {
            $filenameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->image_attachment = $filenameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $title = 'Blog';
        return view('posts.show', compact('post', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'image_attachment' => 'image|nullable|max:1999'
        ]);

        $post = Post::find($id);

        //Handle File Uploading
        if($request->hasFile('image_attachment')) {
            // Get filename w/ extension
            $filenameWithExt = $request->file('image_attachment')->getClientOriginalName();

            // Get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get ext
            $extension = $request->file('image_attachment')->getClientOriginalExtension();

            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload img
            $path = $request->file('image_attachment')->storeAs('public/image_attachments', $filenameToStore);

            Storage::delete('public/image_attachments/'.$post->image_attachment);

            $post->image_attachment = $filenameToStore;
        }
        
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('/posts')->with('success', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        if($post->image_attachment != 'noimage.jpg') {
            Storage::delete('public/image_attachments/'.$post->image_attachment);
        }

        return redirect('/posts')->with('success', 'Post Removed');
    }
}
