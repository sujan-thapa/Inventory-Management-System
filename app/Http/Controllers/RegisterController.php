<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    //
    public function reg(Request $request){

        //hit and add item in the database table
        User::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/dashboard');
        // return 'sujan vg';
    }

}
