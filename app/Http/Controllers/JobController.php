<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Category;
use Auth;

class JobController extends Controller
{
    public function index() 
    {
        if (Auth::id()) {
            $id = Auth::id();
            $user = User::find($id);
            $categories = Category::all();
            return view('auth\job', compact("user"), compact("categories"));
        } else {
            return redirect('/profilo');
        } 
    }

    public function create(Request $request) 
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'category_id' => ['required', 'numeric'],
            'description' => ['required', 'string', 'max:6000'],
            'company_id' => ['required', 'numeric'],
            'address' => ['required', 'string', 'max:255'],
            'province' => ['required', 'string', 'max:255'],
            'city' => ['required', 'string', 'max:255'],
            'latitude' => ['required', 'string', 'max:20'],
            'longitude' => ['required', 'string', 'max:20'],
        ]);

        $data = $request->all();
        $job = new Job();
        $job->fill($data);
        $job->save();
        return redirect('/profilo');
    }

    public function show ($id) {

        $job = Job::find($id);
        $user_id = Auth::id();
        $user = User::find($user_id);

        if (!Auth::guest()) {
            return view('auth/job_show', compact('job', 'user'));
        } else {
            return redirect('/login');
        }
    }
    
}
