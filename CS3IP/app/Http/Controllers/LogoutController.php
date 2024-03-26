<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(Request $request){
        auth()->logout();

        $request->session()->flash('alert-success', 'You have successfully logged out, press OK to continue!');
        return redirect('/');
    }
}
