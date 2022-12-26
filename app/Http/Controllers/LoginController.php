<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return Response
     */
    
     public function index()
     {
         return view('member.login',[
             'title' => 'Login'
         ]);
     }

     public function authenticate(Request $request)
        {

        $credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
            // Auth passed...
            return redirect()->intended('dashboard')->with('success','Login Successfully');
        }
            return back()->withErrors('Login failed!');
        }

            //logout
    public function logout(Request $request)
        {
            Auth::logout();
        
            $request->session()->invalidate();
        
            $request->session()->regenerateToken();
        
            return redirect('/');
        }

}
