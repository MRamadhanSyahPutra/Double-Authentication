<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function Login()
    {
        return view('auth.loginAdmin');
    }

    public function Home()
    {
        return view('homeAdmin');
    }

    public function PostLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib di isi!',
            'password.required' => 'Password wajib di isi!',
        ]);

        $credentials = $request->only(['email', 'password']);
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect('admin/home')->with('success', 'Berhasil Login!');
        }
        return redirect('admin/login')->with('toast_error', 'Email dan password kamu salah!');
    }

    public function Logout()
    {

        Session::flush();

        Auth::guard('admin')->logout();
        return redirect('/')->with('success', 'Yey, kamu berhasil keluar admin!🫡');
    }
}
