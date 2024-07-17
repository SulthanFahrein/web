<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function postlogin (Request $request)
    {
        //dd($request->all());
        if (Auth::attempt($request->only('username','password'))){
            return redirect('main');
        }
        return redirect('login');
    }
}
