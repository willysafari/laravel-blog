<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    //
    public function create()
    {
        return view('register.create');
    }

    public function store(Request $request)
    {
        //  return $request->all();
        // // Validate the request data
       $data= $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => ['required','min:3','max:255',Rule::Unique('users','username')],
            'email' => 'required|email|max:255|email|unique:users,email',
            'password' => [
    'required',
    'string',
    'min:8', 
    'max:255',
    // 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/',
     // Optional but recommended: ensures password matches 'password_confirmation'
]
            
        ]);
        // Hash the password before saving
        $data['password'] = bcrypt($data['password']);

       $user= User::create($data);

             auth()-> login($user);
        // Flash a success message to the session
        session()->flash('success', 'Registration successful! You can now log in.');
        // Optionally, you can redirect or return a response
   

         return redirect('/');

        
    }
}
