<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function prosesLogin(Request $request)
{
    $email = $request->email;
    $password = $request->password;

    // Cek kredensial dummy
    if ($email === 'admin@gmail.com' && $password === 'admin123') {
        // Simpan sesi sederhana
        session(['login' => true, 'email' => $email]);
        return redirect('/home');
    } else {
        return redirect('/login')->with('error', 'Email atau password salah !');
    }
}

    public function login()
    {
        return view("login");
    }
    public function home()
    {
        return view("home");
    }

    public function datauseradmin()
    {
        return view("datauseradmin");
    }

    public function pembelian()
    {
        return view("pembelian");
    }

    public function penjualan()
    {
        return view("penjualan");
    }

    public function kelolaobat()
    {
        return view("kelolaobat");
    }

    public function stokopname()
    {
        return view("stokopname");
    }

    public function laporan()
    {
        return view("laporan");
    }

    public function logout()
    {
    return redirect('/');
    }
}
