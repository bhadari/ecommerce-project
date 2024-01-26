<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function store1(Request $request)
    {
        $user = User::create([

            "email" => $request->email,
            "name" => $request->name,


            "password" => Hash::make($request->password),
        ]);
        Auth::login($user);

        dd('registered successfully');
    }

    public function loginconfirms(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard');
        } else {
            return 'Invaild Credentials';
        }
    }
}
