<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function show(){
        if(Auth::check()){

            return redirect('/home');
        }
        return view('auth.register');
    }
    public function register(RegisterRequest $request){
        $user = user::create($request->validated());
        return redirect('/login')->with('success', 'Cuenta creada Exitosamente');
        
    }
}
