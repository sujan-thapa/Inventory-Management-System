<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function authenticatee(Request $request)
    {
        // $credentials = $request->only('username','password');

        // if (Auth::attempt($credentials)){
        // // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        //     # code...
        //     // $request->session()->regenerate();
        //     // return redirect()->intended('dashboard');
        //     return redirect('Dashboard');
        // }else{
        //     // return redirect('/');
        //     return 'sujan vg';
        // }
        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {

            return redirect('/dashboard');
        }

    }
}
