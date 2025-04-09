<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function login_proccess(Request $request)
    {
        //validate
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //search user
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            return redirect()->intended('/admin/dashboard');
        }
        return back()->with('failed', 'invalid credentials');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'You logged out');
    }
}
