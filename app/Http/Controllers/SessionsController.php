<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    //
    public function create()
    {
        return view('sessions.create');
    }
   public function store(){
        // validate the request
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        // attempt to aunthenticate the user
        if (auth()->attempt(request(['email', 'password']))) {
            session()->regenerate();
            // if authentication fails, redirect back with an error message
            
              return redirect('/')->with('success', 'You have been logged in successfully.' );

              
        }
        throw ValidationException::withMessages([
            'email' => ['Invalid credentials provided.']
        ]);
        // else {
        //     // if authentication is successful, redirect to home with a success message
        //     // session()->flash('success', 'You have been logged in successfully.');
        //   // return back()->withErrors([
        //     //     'email' => 'The provided credentials do not match our records.'
        //     // ]);
        // }
        // // based on provided credentials
        // rdirect to home with success message
   }
    public function destroy()
    {
        // dd('logout the user out');
        auth()->logout();

        session()->flash('success', 'You have been logged out successfully.');

        return redirect('/');

    }
}
