<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Session;
use Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function loginForm()
    {
        if (Auth::check()) {
            return redirect('/');
        }
        return view('auth.login');
    }

    public function postLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required|min:8'
        ],
        [
            'email.required' => 'Email Harus Diisi!',
            'password.min' => 'Password Minimal 8 Karakter!',
            'password.required' => 'Password Harus Diisi!'
        ] 
        );

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            return redirect()->intended('/');
        }
        Session::flash('error', 'Email Atau Password Salah!');
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
