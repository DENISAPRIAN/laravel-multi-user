<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SesiController extends Controller
{
    // Method untuk menampilkan halaman login
    function index()
    {
        return view('login');  // merender tampilan login
    }

    // Method untuk menangani proses login
    function login(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'email' => 'required|email',     
            'password' => 'required'         
        ], [
            'email.required' => 'Email Wajib Di Isi',
            'email.email' => 'Format Email Tidak Valid',
            'password.required' => 'Password Wajib Di Isi'
        ]);
      $infologin=[
        'email'=> $request->email,
        'password'=> $request->password,
      ];

      if
    }
}
