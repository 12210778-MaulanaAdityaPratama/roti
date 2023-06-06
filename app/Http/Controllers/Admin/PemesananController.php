<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\UserProdukModel;
use App\Models\ProdukModel;


class PemesananController extends Controller
{
    public function index()
    {
        if (!Auth::user()->isAdmin()) {
            return redirect('/user/dashboard');
        }
        $data['userproduk'] = UserProdukModel::orderBy('id', 'desc')->get();
        return view('admin.pemesanan.pemesanan', $data)->with('title', 'Pemesanan');
    }
    public function create()
    {
        $data['produk'] = ProdukModel::all();
        $data['users'] = User::all();
        return view('admin.pemesanan.create', $data);
    }
    public function store(Request $request)
    {


        $existingPemesanan = UserProdukModel::where('produk_id', $request->produk_id)
    ->where('users_id', $request->users_id)
    ->first();

    if ($existingPemesanan) {
        // Produk sudah ada, lakukan penambahan jumlah
        $existingPemesanan->jumlah += $request->jumlah;
        $existingPemesanan->save();

        return redirect()->route('admin.pemesanan')
        ->with('sukses', 'Jumlah produk berhasil diperbarui');
}
    $request->validate([
    'produk_id' => 'required',
    'users_id' => 'required',
    'jumlah' => 'required'
    ]);
    $pemesanan = new UserProdukModel();
    $pemesanan->produk_id = $request->produk_id;
    $pemesanan->users_id = $request->users_id;
    $pemesanan->jumlah = $request->jumlah;
    $pemesanan->save();
    return redirect()->route('admin.pemesanan')
    ->with('sukses','Data Pemesanan Tersimpan.');

    }
    public function show(UserProdukModel $pemesanan)
    {
    return view('admin.pemesanan.show',compact('pemesanan'));
    } 
    public function edit(UserProdukModel $pemesanan)
    {
        $data['produk'] = ProdukModel::all();
        $data['users'] = User::all();
    return view('admin.pemesanan.edit',compact('pemesanan','data'));
    }
    public function update(Request $request, $id)
    {
    $request->validate([
        'produk_id' => 'required',
        'users_id' => 'required',
        'jumlah' => 'required'
    ]);
    $pemesanan = UserProdukModel::find($id);
    $pemesanan->produk_id = $request->produk_id;
    $pemesanan->users_id = $request->users_id;
    $pemesanan->jumlah = $request->jumlah;
    $pemesanan->save();
    return redirect()->route('admin.pemesanan')
    ->with('sukses','Data Pemesanan Sudah Terupdate');
    }
    public function destroy(UserProdukModel $pemesanan)
    {
    $pemesanan->delete();
    return redirect()->route('admin.pemesanan')
    ->with('sukses','Data Pemesanan Sudah Terhapus');
    }
}
