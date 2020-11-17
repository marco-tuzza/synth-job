<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class ProfileController extends Controller
{
    public function index () 
    {
        if ($user= Auth::user()) {
            $id = Auth::id();
            $user = User::find($id);
            return view('auth.profile', compact("user"));
        } else {
            return view('auth\login');
        }     
    }

    public function show($id) 
    {
        if ($id != Auth::user()) {
            $user = User::find($id);
            return view('auth.profile_show', compact("user"));
        } else {
            return view('auth\login');
        } 
    }

    public function update(Request $request, $id) 
    {
        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
        ]);

        $data = $request->all();
        $user = User::find($id);
        $user->update($data);

        return view('auth/login');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        if($user) {
            $user->delete();
            return view('auth/login');
        } else {
            return abort('404');
        }
    }
}
