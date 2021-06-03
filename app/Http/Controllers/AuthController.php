<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //

    public function register()
    {
        return view('user.auth.register');
    }
    public function doregister(Request $request)
    {
        User::create([
            'name' => $request->firstname . $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'roles' => 'user'
        ]);
        return redirect()->route('login');
    }
    public function login()
    {
        return view('user.auth.login');
    }

    public function dologin(Request $request)
    {
        if (Auth::attempt($request->only(['email', 'password']))) {
            if (Auth::user()->roles == 'admin') {
                return redirect()->route('admin.home');
            }
            return redirect()->route('index');
        }
        return redirect()->back()->with('email', 'Email atau password salah');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
