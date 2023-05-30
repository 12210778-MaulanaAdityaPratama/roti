<?php

namespace App\Http\Controllers\Admin;
use App\Models\UserModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['user'] = UserModel::orderBy('id','desc')->paginate(5);
        return view('admin.profile',$data)->with('title', 'Profile');
    }
}
