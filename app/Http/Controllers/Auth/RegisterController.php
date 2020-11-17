<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Company;
use App\Models\Worker;
use App\Models\Experience;
use Newsletter;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/register/complete';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest');
    }

    public function choice () 
    {
        return view('auth\register_choice');
    }

    public function company () 
    {
        return view('auth\register_company');
    }

    public function company_create(request $request) 
    {
        Company::create([
            'company_name' => $request['company_name'],
            'user_id' => $request['user_id'],
            'phone_number' => $request['phone_number'],
            'p_iva' => $request['p_iva'],
            'description' => $request['description'],
            'address' => $request['address'],
            'province' => $request['province'],
            'city' => $request['city'],
        ]);

        return redirect('profilo');;
    }

    public function worker_create(request $request) 
    {
        Worker::create([
            'birth_date' => $request['birth_date'],
            'sex' => $request['sex'],
            'phone_number' => $request['phone_number'],
            'user_id' => $request['user_id'],
            'address' => $request['address'],
            'province' => $request['province'],
            'city' => $request['city'],
        ]);

        return redirect('profilo');;
    }

    public function complete ()
    {   
        $id = Auth::id();
        $user = User::find($id);
        return view('auth\register_complete', compact('user'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {   
        return Validator::make($data, [
            'role' => ['required', 'max:1'],
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {   
        Newsletter::subscribe($data['email'], ['FNAME'=>$data['first_name'], 'LNAME'=>$data['last_name']]);
        return User::create([
            'role' => $data['role'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
