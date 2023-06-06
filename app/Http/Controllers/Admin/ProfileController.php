<?php

namespace App\Http\Controllers\Admin;
use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login');
        }
        $loggedInUser = Auth::user();
        $user = User::find($loggedInUser->id);
        if (!$user) {
            return redirect('/login');
        }
        $data['user'] = $user;
        return view('admin.profile',$data)->with('title', 'Profile');
    }
}
