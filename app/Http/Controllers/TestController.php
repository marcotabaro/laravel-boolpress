<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function guest(){

        $user = Auth::user();
        return view('auth.hello');
    }

    public function logged(){

        $user = Auth::user();

        return view('auth.hello', compact('user'));
    }
}
