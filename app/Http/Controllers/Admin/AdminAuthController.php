<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    //
    public function login()
    {
        return view('admin.auth.login');
    }

    public function loginSubmit(Request $request){
        $credentials =  $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|max:255',
        ]);
        
        if(Auth::guard('admin')->attempt($credentials) ){
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }
        $request->session();
        return redirect()->route('admin.login')->with('error','Please check your credentials');
    }
}
