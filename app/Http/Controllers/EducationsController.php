<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use App\Models\Category;
use Auth;

class EducationsController extends Controller
{
    public function show () 
    {
        return view('auth\educations');
    }

    public function create(Request $request) 
    {
        $data = $request->all();
        $experience = new Education();
        $experience->fill($data);
        $experience->save();
        return redirect('/profilo');
    }

    public function edit($id) 
    {
        $education = Education::find($id);
        $user = Auth::id();
        $categories = Category::all();

        if ($user == $education->user_id ) {

            return view('/auth/educations_show', compact('education', 'categories'));

        } else {

            return redirect('/profilo');
        }
    }

    public function update(Request $request, $id) 
    {
        $data = $request->all();
        $education = Education::find($id);
        $education->update($data);

        return redirect('/profilo');
    }

    public function delete($id) 
    {
        $education = Education::find($id);
        if($education) {
            $education->delete();
            return redirect('/profilo');
        } else {
            return abort('404');
        }
    }
}
