<?php

namespace App\Http\Controllers;

use App\Models\Tech;
use Illuminate\Http\Request;

class TechController extends Controller
{
    public function index(){
        return view('dashboard.techs.index', [
            'techs' => Tech::latest()->get()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255'
        ]);
        Tech::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function destroy(Tech $tech){
        $tech->delete();
        return back();
    }
}
