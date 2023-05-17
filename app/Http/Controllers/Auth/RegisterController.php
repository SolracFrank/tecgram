<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Str;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        //dd($request)->username;
        //$variable = 2;
        //dd($variable); 
        //var_dump($variable); , 'regex:/^[a-zA-Z][a-zA-Z0-9]*$/'//con que puede empezar, min y max, unico
        $request->validate([
            'name'=>['required', 'max:50'],
            'username'=>['required', 'unique:users', 'min:3', 'max:10'],
            'email'=>['required', 'email', 'max:60','unique:users'],
            'password'=>['required', 'min:8', 'confirmed']
        ]);
        User::create([
            'name'=>$request->name,
            'username'=>Str::lower($request->username),
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);

        auth()->attempt([
            'username'=>$request->username,
            'password'=>$request->password
        ]);

        return redirect()->route('muro.index');
    }
}
