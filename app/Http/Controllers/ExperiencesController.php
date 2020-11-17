<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Experience;
use Auth;

class ExperiencesController extends Controller
{
    public function show () 
    {
        $categories = Category::all();
        return view('auth\experiences', compact('categories'));
    }

    public function create(Request $request) 
    {
        $data = $request->all();
        $experience = new Experience();
        $experience->fill($data);
        $experience->save();
        return redirect('/profilo');
    }

    public function edit($id) 
    {
        $experience = Experience::find($id);
        $user = Auth::id();
        $categories = Category::all();

        if ($user == $experience->user_id ) {

            return view('/auth/experience_show', compact('experience', 'categories'));

        } else {

            return redirect('/profilo');
        }
    }

    public function update(Request $request, $id) 
    {
        $data = $request->all();
        $experience = Experience::find($id);
        $experience->update($data);

        return redirect('/profilo');
    }

    public function delete($id) 
    {
        $experience = Experience::find($id);
        if($experience) {
            $experience->delete();
            return redirect('/profilo');
        } else {
            return abort('404');
        }
    }
}
