<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class Authi extends Controller
{
    public function index()
    {
    	return view('login');
    }
    public function loginprocess(Request $request)
    {
       $credentials = $request->only('email', 'password');
       
        $name = "Anus Fati";
        if (Auth::attempt($credentials)) {
            // Authentication passed...
		  $request->session()->put('name', 'nasim');

            return redirect('allinfo')->with('success', ['your message,here']);
        }
        else
        {
        	return $credentials;
        }
    }
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/login');
    }
 
}
