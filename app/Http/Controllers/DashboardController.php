<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $jumlahUser = User::where('role', 'user')->count();
        
        // Hitung jumlah semua pengaduan
        $jumlahAduan = Pengaduan::count();

        // Hitung jumlah pengaduan yang statusnya 'proses'
        $jumlahProses = Pengaduan::where('status', 'proses')->count();

    return view('dashboard', compact('jumlahUser','jumlahAduan','jumlahProses'));
        // return view('dashboard');
    }
    public function home(){
        return view('home');
    }

}
