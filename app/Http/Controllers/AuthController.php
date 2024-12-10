<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        $nama = "Riyan Apriani";
        $kelas = "MI22A";
        $nim = "2257401026";

        return view('welcome', compact('nama', 'kelas', 'nim'));
    }


    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function dashboard()
    {
        $nama = "Riyan Apriani";
        $kelas = "MI22A";
        $nim = "2257401026";

        return view('dashboard', compact('nama', 'kelas', 'nim'));
    }
}
