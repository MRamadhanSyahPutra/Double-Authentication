<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Authentication extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }

    public function Register()
    {
        return view('auth.register');
    }

    public function Home()
    {
        return view('home');
    }

    public function PostRegister(Request $request)
    {

        $request->validate(
            [
                'nama_depan' => ['required', 'string', 'min:2'],
                'nama_belakang' => ['required', 'string', 'min:3'],
                'email' => ['required', 'email', 'string', 'unique:users,email'],
                'gender' => ['required', 'in:F,M'],
                'password' => ['required', 'string', 'min:8'],
                'alamat' => ['required', 'min:3', 'string'],
                'no_telp' => ['required', 'integer', 'min:10'],
            ],
            [
                'nama_depan.required' => 'Nama depan wajib di isi!',
                'nama_depan.min' => 'Nama harus lebih dari 2 huruf!',
                'nama_belakang.required' => 'Nama belakang wajib di isi!',
                'nama_belakang.min' => 'Nama belakang harus lebih dari 3 huruf!',
                'email.required' => 'Email wajib di isi!',
                'email.email' => 'Inputan bukan email!',
                'email.unique' => 'Email sudah terdaftar!',
                'gender.required' => 'Gender wajib di isi!',
                'gender.in' => 'Maaf inputan anda tidak di kenali!',
                'password.required' => 'Password wajib di isi!',
                'password.min' => 'Password harus lebih dari 8 huruf!',
                'alamat.required' => 'Alamat wajib di isi!',
                'alamat.min' => 'Apakah alamatmu cuma 3 huruf?',
                'no_telp.required' => 'No telp wajib di isi!',
                'no_telp.integer' => 'No telp harus berupa angka!',
                'no_telp.min' => 'No telp harus lebih dari 10 angka!'
            ]
        );

        User::create([
            'nama_depan' => $request->nama_depan,
            'nama_belakang' => $request->nama_belakang,
            'email' => $request->email,
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp
        ]);

        return redirect('login')->with('success', 'Kamu berhasil Membuat Akun😉');
    }

    public function PostLogin(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email Wajib di isi!',
            'password.required' => 'Password wajib di isi!',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('web')->attempt($credentials)) {
            return redirect('home')->with('success', 'Login berhasil!👌');
        }
        return redirect('login')->with('toast_error', 'Email atau password anda salah!');
    }

    public function Logout()
    {

        Session::flush();

        Auth::guard('web')->logout();
        return redirect('/')->with('success', 'Kamu berhasil keluar!😊');
    }
}
