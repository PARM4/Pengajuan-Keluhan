<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email|max:50',
            'password'=>'required|max:50',
        ]);

        if(Auth::attempt($request->only('email','password'), $request->remember)){
            // Tambahkan pesan sukses sebelum redirect
            if(Auth::user()->role=='user') {
                return redirect('/home')->with('success', 'Login berhasil!');
            }
            return redirect('/dashboard')->with('success', 'Login berhasil!');
        }

        return back()->with('failed','Email atau Password salah');
    }


    function register(Request $request){
        $request->validate([
            'name'=>'required|max:50',
            'email'=>'required|email|max:50',
            'password'=>'required|max:50|min:8',
            'confirm_password'=>'required|max:50|min:8|same:password',
        ]);
        
        $request['status'] = 'active';
        $user = User::create($request->all());
        Auth::login($user);
        return redirect('/pengunjung');
    }

    public function logout(){
        Auth::logout(Auth::user());
        return redirect('/');
    }
}
