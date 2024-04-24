<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function registers()
    {
        return view('registers'); //resources/views/registers.blade.php
    }
    
    public function registersPost(Request $request)
    {
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email; //email
        $user->password = Hash::make($request->password); //password

        $user->save();

        return back()->with('success', 'User created successfully.');
    }
    public function loginn()
    {
        return view('loginn'); //resources/views/loginn.blade.php
    }
    public function loginnPost(Request $request)
    {
     
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        
        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Login successful.');
        }

        return back()->with('error', 'Invalid login credentials.');
    }
    
    public function logout()
    {
        Auth::logout();
 
        return redirect()->route('login');
    }
}
