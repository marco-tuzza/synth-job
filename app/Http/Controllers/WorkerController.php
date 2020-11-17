<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Worker;
use Auth;

class WorkerController extends Controller
{
    public function edit($id) 
    {
        $data = Worker::find($id);
        $user = Auth::id();

        if ($user == $data->user_id ) {

            return view('/auth/worker_edit', compact('data'));

        } else {

            return redirect('/profilo');
        }
    }

    public function update(Request $request, $id) 
    {
        $data = $request->all();
        $worker = Worker::find($id);
        $worker->update($data);

        return redirect('/profilo');
    }
}
