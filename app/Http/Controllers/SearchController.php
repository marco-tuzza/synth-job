<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $search = $request['search'];
        $jobs = Job::where('title', 'LIKE', '%'.$search.'%')->where('latitude', '>', $request['latitude'] - 0.3)->where('latitude', '<', $request['latitude'] + 0.3)->where('longitude', '>', $request['longitude'] - 0.3)->where('longitude', '<', $request['longitude'] + 0.3)->get();

        return view('auth/search', compact('jobs'));
    }
}
