<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function index()
    {
        // Mendapatkan data user yang sedang login
        $loggedInUser = Auth::user();

        // Mengambil data user yang sedang login berdasarkan ID
        $user = User::find($loggedInUser->id);

        $data['user'] = $user;

        return view('user.dashboard', $data)->with('title', 'Beranda');
    }
}
