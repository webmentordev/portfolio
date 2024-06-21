<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index(){
        return view('dashboard.projects.index', [
            'projects' => Project::latest()->get()
        ]);
    }
    public function create(){
        return view('dashboard.projects.create');
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'github' => 'required|url:http,https',
            'order' => 'required|numeric',
            'stacks' => 'required',
            'body' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,webp'
        ]);
        Project::create([
            'name' => $request->name,
            'github' => $request->github,
            'order' => $request->order,
            'stacks' => $request->stacks,
            'body' => $request->body,
            'image' => $request->image->store('projects', 'public_disk')
        ]);
        return back()->with('success', 'Project has been added!');
    }
    public function destroy(Project $project){
        Storage::disk('public_disk')->delete($project->image);
        $project->delete();
        return back();
    }
    public function status(Project $project){
        $project->is_active = !$project->is_active;
        $project->save();
        return back();
    }
    public function completed(Project $project){
        $project->is_completed = !$project->is_completed;
        $project->save();
        return back();
    }
    public function edit(Project $project){
        return view('dashboard.projects.update', [
            'project' => $project
        ]);
    }
    public function update(Request $request, Project $project){
        $request->validate([
            'name' => 'required',
            'github' => 'required|url:http,https',
            'order' => 'required|numeric',
            'stacks' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp'
        ]);
        $image = null;
        if($request->hasFile('image')){
            Storage::disk('public_disk')->delete($project->image);
            $image = $request->image->store('projects', 'public_disk');
        }
        $project->update(array_filter([
            'name' => $request->name,
            'github' => $request->github,
            'order' => $request->order,
            'stacks' => $request->stacks,
            'body' => $request->body,
            'image' => $image
        ]));
        return back()->with('success', 'Project has been updated!');
    }
}