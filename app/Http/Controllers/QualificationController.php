<?php

namespace App\Http\Controllers;

use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function index(){
        return view('dashboard.qualifications.index', [
            'qualifications' => Qualification::latest()->get()
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|max:255'
        ]);
        Qualification::create([
            'name' => $request->name
        ]);
        return back();
    }

    public function destroy(Qualification $qualification){
        $qualification->delete();
        return back();
    }
}