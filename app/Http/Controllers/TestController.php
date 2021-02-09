<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function guest(){

        return view('auth.hello');
    }

    public function logged(){
        if(Auth::check()){
            $user = Auth::user();
        } else {
            abort(401);
        }
        return view('auth.hello', compact('user'));
    }
}
