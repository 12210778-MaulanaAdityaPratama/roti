<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserModel;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Otentikasi berhasil, pengguna terautentikasi
            // Menyimpan informasi pengguna dalam session
        $user = Auth::user();
        session()->put('user', $user);

        if ($user->status == 'admin') {
            // Jika pengguna dengan status pegawai login

            // Redirect ke halaman pegawai
            return redirect('/admin/profile');
        } else {
            // Jika pengguna biasa login

            // Redirect ke halaman pengguna
            return redirect('/user/dashboard');
        }
        } else {
            // Otentikasi gagal, username atau password salah

            // Redirect kembali ke halaman login dengan pesan error
            return redirect()->back()->withErrors(['message' => 'Username atau password salah'])->withInput();
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}

// class LoginController extends Controller
// {
//     public function index()
//     {
//         return view('login');
//     }

//     public function login(Request $request)
//     {
//         $validator = Validator::make($request->all(), [
//             'username' => 'required',
//             'password' => 'required',
//         ]);

//         if ($validator->fails()) {
//             return redirect()->back()->withErrors($validator)->withInput();
//         }
//     {
//         // Mendapatkan username dan password dari input form
//         $username = $request->input('username');
//         $password = $request->input('password');

//         // Mengambil data pengguna berdasarkan username
//         $user = UserModel::where('username', $username)->first();

//         // Memeriksa apakah pengguna ditemukan dan password cocok
//         if ($user && $user->password === $password) {
//             // Pengguna ditemukan dan password cocok

//             // Lakukan tindakan yang diinginkan, misalnya menyimpan pengguna ke dalam session

//             // Contoh: menyimpan pengguna dalam session
//             session()->put('user', $user);

//             // Redirect ke halaman dashboard atau halaman lain yang diinginkan
//             return redirect('/admin/profile');
//         } else {
//             // Pengguna tidak ditemukan atau password tidak cocok

//             // Redirect kembali ke halaman login dengan pesan error
//             return redirect()->back()->withErrors(['message' => 'Username atau password salah'])->withInput();
//                 }
//     }
// }

//     public function logout()
//     {
//         Auth::logout();
//         return redirect('/login');
//     }
// }
