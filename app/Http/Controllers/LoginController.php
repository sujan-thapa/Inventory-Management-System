<?php

namespace App\Http\Controllers;

// use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    //
    public function authenticatee(Request $request)
    {
        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        //     // return redirect('/dashboard');
        //     return 'sujanvg';
        // } else {

        //     // return redirect('/');
        //     return 'vg';
        //     // return 'sujanmagar';
        //     // return redirect('/dashboard');
        // }

            $request->validate([
                'username'=>'required',
                'password'=>'required',
            ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {

            // return redirect('/');
            return back();
            // return 'vg';
            // return back()->withErrors('sujanvg');
        }

    }

    // for logging out with the help of authentication ->destroys session
    public function logout(Request $request)
    {

        Auth::logout();
        // $request->session()->invalidate();

        return redirect('/');
    }
}
