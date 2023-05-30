<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProdukModel;
use Illuminate\Support\Facades\Storage;

class ProdukController extends Controller
{
    public function index()
    {
        $data['produk'] = ProdukModel::orderBy('id','desc')->get();
        return view('admin.produk.produk', $data)->with('title', 'produk');
    }
   

    public function create()
    {
    return view('admin.produk.create');
    }

    public function store(Request $request)
    {
    $request->validate([
        'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'kode' => 'required',
        'produk' => 'required',
        'harga' => 'required',
     ]);
     $foto = $request->file('foto');
    $path = $foto->store('public/images');

    $produk = new ProdukModel();
    $produk->kode = $request->kode;
    $produk->produk = $request->produk;
    $produk->harga = $request->harga;
    $produk->stok = $request->stok;
    $produk->foto = $path;
    $produk->save();
    return redirect()->route('admin.produk')
    ->with('sukses','Data Produk Tersimpan.');
    }

    public function show(ProdukModel $produk)
    {
    return view('admin.produk.show',compact('produk'));
    } 

    public function edit(ProdukModel $produk)
    {
    return view('admin.produk.edit',compact('produk'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'produk' => 'required',
            'harga' => 'required'
        ]);
        $produk = ProdukModel::find($id);

        $produk->kode = $request->kode;
        $produk->produk = $request->produk;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if ($produk->foto) {
                Storage::delete($produk->foto);
            }
            $foto = $request->file('foto');
            $path = $foto->store('public/images');
            $produk->foto = $path;
    }
    $produk->save(); 
    return redirect()->route('admin.produk')
    ->with('sukses','Data Produk Terupdate.');
}
    public function destroy(ProdukModel $produk)
    {
    $produk->delete();
    return redirect()->route('admin.produk')
    ->with('sukses','Data Produk Sudah Terhapus');
    }
}
