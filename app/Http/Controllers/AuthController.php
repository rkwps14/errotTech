<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Hash;
use Auth;
use DB;

class AuthController extends Controller
{
    public function loginPage(){
        return view('login');
    }

    // for login 
    public function authenticate(Request $request){
        $logs = $request->only('email','password');

        if(Auth::attempt($logs)){
            return redirect('admin');
        }
        else{
            echo "Wrong Logs";
        }
    }

    public function signupPage(){
        return view('signup');
    }

    public function signup(Request $req){
        // validate data

        $req->validate([
            'full_name' => 'required|string|min:2',
            'email' => 'required',

            // validate password
            'password' => ['required','confirmed',Password::min(6)]
            
        ]);

        
        $user = new User;

        $user->full_name = $req->full_name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->is_admin = True;
        $user->created_by = 1;

        $user->save();
        
        return redirect('/login')->with('success','Data Signup Successfully');
    }

    public function admin(){

        return view('admin');

    }
}
