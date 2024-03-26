<?php
 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{


    public function login() {
        return view('login');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(!auth()->attempt($request->only('email', 'password'))) {
            return back()->with('errorMessage', 'Incorrect details provided');
        }

        $request->session()->flash('alert-success', 'You have successfully logged in, press OK to continue!');
        return redirect('/');
    }

}