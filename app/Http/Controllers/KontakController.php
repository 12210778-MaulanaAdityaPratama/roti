<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;

class KontakController extends Controller
{
    public function index()
    {
        // return view('kontak')->with('title', 'Kontak');
        $data['produk'] = ProdukModel::orderBy('id','desc')->get();
        return view('kontak', $data)->with('title', 'kontak');
    }
}
