<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('auths.login');
    }
    public function postlogin(Request $request)
    {
        if(Auth::guard('admin')->attempt(['username' => $request->username,'password' => $request->password])){
            $user=Auth::guard('admin')->getLastAttempted();
        //if(Auth::attempt($request->only('username','password'))){
            return redirect('/dashboard');
        }
        else{
            return redirect('/admin/login');
        }
    }
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect('/admin/login');
    }
}
