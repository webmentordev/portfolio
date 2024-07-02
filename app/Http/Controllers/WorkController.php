<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index(){
        return view('dashboard.works.index', [
            'works' => Work::latest()->get()
        ]);
    }
    public function create(){
        return view('dashboard.works.create');
    }
    public function store(Request $request){
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|url:http,https|max:255',
            'description' => 'required|max:255',
            'company' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required|max:255',
            'started_at' => 'required|max:255',
            'end_at' => 'nullable|max:255',
            'order' => 'required|numeric',
        ]);
        Work::create([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'company' => $request->company,
            'location' => $request->location,
            'type' => $request->type,
            'started_at' => $request->started_at,
            'end_at' => $request->end_at,
            'order' => $request->order
        ]);
        return back()->with('success', 'Work has been added!');
    }
    public function destroy(Work $work){
        $work->delete();
        return back();
    }
    public function edit(Work $work){
        return view('dashboard.works.update', [
            'work' => $work
        ]);
    }
    public function update(Request $request, Work $work){
        $request->validate([
            'title' => 'required|max:255',
            'image' => 'required|url:http,https|max:255',
            'description' => 'required|max:255',
            'company' => 'required|max:255',
            'location' => 'required|max:255',
            'type' => 'required|max:255',
            'started_at' => 'required|max:255',
            'end_at' => 'nullable|max:255',
            'order' => 'required|numeric',
        ]);
        $work->update(array_filter([
            'title' => $request->title,
            'image' => $request->image,
            'description' => $request->description,
            'company' => $request->company,
            'location' => $request->location,
            'type' => $request->type,
            'started_at' => $request->started_at,
            'end_at' => $request->end_at,
            'order' => $request->order
        ]));
        return back()->with('success', 'Work has been updated!');
    }
}
