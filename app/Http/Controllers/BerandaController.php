<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdukModel;
use App\Models\UserProdukModel;

class BerandaController extends Controller
{
    public function index()
    {
        $data['userproduk'] = UserProdukModel::orderBy('id','desc')->get();
        $produk = ProdukModel::inRandomOrder()->paginate(3);
        $title = 'beranda';
        
        return view('beranda',$data, compact('produk', 'title'));
    }
    public function tambahProduk(Request $request)
    {
        // Ambil ID produk dari request
        $produkId = $request->input('produk_id');

        // Cek apakah produk sudah ada pada tabel user_produk untuk pengguna yang terautentikasi
    $userProduk = UserProdukModel::where('users_id', auth()->user()->id)
    ->where('produk_id', $produkId)
    ->first();
    if ($userProduk) {
        // Jika produk sudah ada, tambahkan jumlahnya
        $userProduk->increment('jumlah');
    } else {
        // Jika produk belum ada, buat entri baru di tabel user_produk
        UserProdukModel::create([
            'users_id' => auth()->user()->id,
            'produk_id' => $produkId,
            'jumlah' => 1, // Set jumlah awal menjadi 1
        ]);
    }

        // Buat entri baru di tabel user_produk
        // UserProdukModel::create([
        //     'users_id' => auth()->user()->id,
        //     'produk_id' => $produkId,
        // ]);

        // Redirect ke halaman yang diinginkan setelah penambahan produk
        return redirect()->route('detail');
    }
}
