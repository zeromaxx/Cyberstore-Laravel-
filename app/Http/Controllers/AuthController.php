<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    public function submit_register(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::create([
            'username' => $username,
            'password' => Hash::make($password),
            'email' => $email,
            'role' => 'user',
        ]);

        if (!empty($user)) {
            $request->session()->flash('success', 'Your account has been created!');
            return redirect()->route('register');
        }
        return redirect()->route('register');
    }

    public function submit_login(Request $request)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required'
        ];
        $validator = Validator::make($request->except(['_token']), $rules);
        if ($validator->fails()) {
            return Redirect::to('login')->withErrors($validator);
        }

        $username = trim($request->input('username'));
        $password = trim($request->input('password'));

        $credentials = [
            'username' => $username,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        } else {
            $request->session()->flash('error', 'Incorrect username or password.');
            return redirect()->back();
        }
    }

    public function quickLogin(Request $request)
    {
        $user = User::where('username', $request->username)->first();

        if ($user) {
            Auth::login($user);
            return redirect()->intended('/');
        }

        return redirect()->back()->with('error', 'Quick login failed.');
    }

}
