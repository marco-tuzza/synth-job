<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Carbon\Carbon;

class ApplicationController extends Controller
{
    public function create($user_id, $job_id)
    {
        $now = date('Y-m-d');
        Application::create([
            'user_id' => $user_id,
            'job_id' => $job_id,
            'date' => $now,
        ]);
        return redirect('/profilo');
    }
}
