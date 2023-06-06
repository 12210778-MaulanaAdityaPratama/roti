<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserProdukModel;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $data['userproduk'] = UserProdukModel::where('users_id', $userId)
        ->orderBy('id', 'desc')
        ->get();
        return view('user/pemesanan',$data)->with('title', 'Pemesanan');
    }
    public function show(UserProdukModel $pemesanan)
    {
    return view('user.show',compact('pemesanan'));
    } 
    public function edit(UserProdukModel $pemesanan)
    {
        $data['produk'] = ProdukModel::all();
        $data['users'] = User::all();
    return view('user.edit',compact('pemesanan','data'));
    }
    public function update(Request $request, $id)
    {
    $request->validate([
        'produk_id' => 'required',
        'jumlah' => 'required'
    ]);
    $pemesanan = UserProdukModel::find($id);
    $pemesanan->produk_id = $request->produk_id;
    $pemesanan->jumlah = $request->jumlah;
    $pemesanan->save();
    return redirect()->route('user.pemesanan')
    ->with('sukses','Data Pemesanan Sudah Terupdate');
    }
    public function destroy(UserProdukModel $pemesanan)
    {
    $pemesanan->delete();
    return redirect()->route('user.pemesanan')
    ->with('sukses','Data Pemesanan Sudah Terhapus');
    }
}
