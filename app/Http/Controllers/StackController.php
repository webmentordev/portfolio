<?php

namespace App\Http\Controllers;

use App\Models\Stack;
use Illuminate\Http\Request;

class StackController extends Controller
{
    public function index(){
        return view('dashboard.stacks.index', [
            'stacks' => Stack::latest()->get()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255'
        ]);
        Stack::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function destroy(Stack $stack){
        $stack->delete();
        return back();
    }
}
