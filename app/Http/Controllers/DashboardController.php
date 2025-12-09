<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlahUser = User::where('role', 'user')->count();

    return view('dashboard', compact('jumlahUser'));
        // return view('dashboard');
    }
    public function home(){
        return view('home');
    }
    public function JumlahUser(){
        // Hitung jumlah user
    
    }

}
