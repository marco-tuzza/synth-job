<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Auth;

class CompanyController extends Controller
{
    public function edit($id) 
    {
        $data = Company::find($id);
        $user = Auth::id();

        if ($user == $data->user_id ) {

            return view('/auth/company_edit', compact('data'));

        } else {

            return redirect('/profilo');
        }
    }

    public function update(Request $request, $id) 
    {
        $data = $request->all();
        $company = Company::find($id);
        $company->update($data);

        return redirect('/profilo');
    }
}
