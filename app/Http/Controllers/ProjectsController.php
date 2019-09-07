<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Projects';
        $projects = Project::orderBy('start_date', 'desc')->get();

        $e_projects = $projects->where('category', 'engineering');

        $s_projects = $projects->where('category', 'software');
        $r_projects = $projects->where('category', 'research');

        return view('projects.index', compact('title', 'e_projects', 's_projects', 'r_projects', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');   
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
            'description' => 'required',
            'body' => 'required',
            'category' => 'required',
            'start_date' => 'required',
            'image_attachment' => 'image|nullable|max:1999'
        ]);


        // Handle File Uploading
        if ($request->hasFile('image_attachment')) {
            // Get filename w/ ext
            $filenameWithExt = $request->file('image_attachment')->getClientOriginalName();

            // Get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get ext
            $extension = $request->file('image_attachment')->getClientOriginalExtension();

            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image
            $path = $request->file('image_attachment')->storeAs('public/image_attachment', $filenameToStore);

        } else {
            $filenameToStore = 'noimage.jpg';
        }

        if (is_null($request->end_date)) {
            $endDate = 'current';
        } else {
            $endDate = $request->end_date;
        }

        $project = new Project;
        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->body = $request->input('body');
        $project->category = $request->input('category');
        $project->start_date = $request->input('start_date');
        $project->end_date = $endDate;
        $project->image_attachment = $filenameToStore;
        $project->save();

        return redirect('/projects')->with('success', 'Project submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $project = Project::find($id);
        $title = 'Projects';

        return view('projects.show', compact('title', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('projects.edit')->with('project', $project);
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
            'description' => 'required',
            'body' => 'required',
            'category' => 'required',
            'start_date' => 'required',
            'image_attachment' => 'image|nullable|max:1999'
        ]);
        
        $project = Project::find($id);

        // Handle File Uploading
        if ($request->hasFile('image_attachment')) {
            // Get filename w/ ext
            $filenameWithExt = $request->file('image_attachment')->getClientOriginalName();

            // Get filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            // Get ext
            $extension = $request->file('image_attachment')->getClientOriginalExtension();

            // Filename to store
            $filenameToStore = $filename.'_'.time().'.'.$extension;

            // Upload image
            $path = $request->file('image_attachment')->storeAs('public/image_attachment', $filenameToStore);

            Storage::delete('public/image_attachments/'.$post->image_attachment);

            $post->image_attachment = $filenameToStore;

        }

        if (is_null($request->end_date)) {
            $endDate = 'current';
        } else {
            $endDate = $request->end_date;
        }

        $project->title = $request->input('title');
        $project->description = $request->input('description');
        $project->body = $request->input('body');
        $project->category = $request->input('category');
        $project->start_date = $request->input('start_date');
        $project->end_date = $endDate;
        $project->save();

        return redirect('/projects')->with('success', 'Project Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

        if($project->image_attachment != 'noimage.jpg') {
            Storage::delete('public/image_attachments/'.$project->image_attachment);
        }

        return redirect('/projects')->with('success', 'Project Removed');
    }
}
