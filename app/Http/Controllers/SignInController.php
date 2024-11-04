<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignInController extends Controller
{
    public function index() {
        return view('contents.auth.sign-in');
    }

    public function signIn(SignInRequest $request) {
        try{
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password, ] , $request->remember)) {
            if(Auth::user()->type == 'Admin')
                return redirect()->route(' ');

                return redirect()->route('dashboard.index');
            }
            return back()->with('error', 'Invalid Credentials');
              } catch (\Throwable $th) {
                     return back()->with('error', $th->getMessage());
                  }
        }
}


