<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    public function show(){

        return view('pages.login');
    }

    public function login(LoginRequest $request){
        
        $credentials = $request->only('user', 'pass');

        if(Auth::attempt($credentials)){

            if(!session()->has('carrito')){
                session(['carrito' => []]);
            }

            $request->session()->regenerate();

            return redirect()->intended('/');

        }

        return back()->withErrors([
            'user' => 'Credenciales incorrectas'
        ])->whitInput();

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');

    }

    
}
