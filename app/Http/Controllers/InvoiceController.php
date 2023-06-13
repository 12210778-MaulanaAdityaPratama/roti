<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProdukModel;

class InvoiceController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $data['userproduk'] = UserProdukModel::where('users_id', $user->id)->orderBy('id','desc')->get();
        return view('invoice', $data)->with('title', 'Invoice');
    }
}
