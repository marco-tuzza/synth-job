<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use App\Models\User;
use Auth;

class SkillsController extends Controller
{
    public function show () 
    {
        return view('auth\skills');
    }

    public function create(Request $request) 
    {
        $data = $request->all();
        $experience = new Skill();
        $experience->fill($data);
        $experience->save();


        return redirect('profilo');
    }

    public function edit () {

        $id = Auth::id();
        $user = User::find($id);

        return view('auth\skills_edit', compact('user'));
    }

    public function delete ($id) {

        $skill = Skill::find($id);
        $skill->delete();

        return redirect('competenza/modifica');
    }
}
