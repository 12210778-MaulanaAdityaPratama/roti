<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProdukModel;

class DetailController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data['userproduk'] = UserProdukModel::where('users_id', $user->id)->orderBy('id','desc')->get();
        return view('detail', $data)->with('title', 'Detail');
    }
    
}
