<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PemesananModel;

class PemesananController extends Controller
{
    public function index()
    {
        $data['pemesanan'] = PemesananModel::orderBy('id','desc')->paginate(5);
        return view('admin.pemesanan.pemesanan', $data)->with('title', 'Pemesanan');
    }
    public function create()
    {
    return view('admin.pemesanan.create');
    }
    public function store(Request $request)
    {
    $request->validate([
    'no' => 'required',
    'kode' => 'required',
    'detail' => 'required'
    ]);
    $pemesanan = new PemesananModel();
    $pemesanan->no = $request->no;
    $pemesanan->kode = $request->kode;
    $pemesanan->no_telp = $request->no_telp;
    $pemesanan->jml_beli = $request->jml_beli;
    $pemesanan->detail = $request->detail;
    $pemesanan->tgl_pesan = $request->tgl_pesan;
    $pemesanan->total = $request->total;
    $pemesanan->save();
    return redirect()->route('admin.pemesanan')
    ->with('sukses','Data Pemesanan Tersimpan.');

    }
    public function show(PemesananModel $pemesanan)
    {
    return view('admin.pemesanan.show',compact('pemesanan'));
    } 
    public function edit(PemesananModel $pemesanan)
    {
    return view('admin.pemesanan.edit',compact('pemesanan'));
    }
    public function update(Request $request, $id)
    {
    $request->validate([
    'no' => 'required',
    'kode' => 'required',
    'detail' => 'required',
    ]);
    $pemesanan = PemesananModel::find($id);
    $pemesanan->no = $request->no;
    $pemesanan->kode = $request->kode;
    $pemesanan->no_telp = $request->no_telp;
    $pemesanan->jml_beli = $request->jml_beli;
    $pemesanan->detail = $request->detail;
    $pemesanan->tgl_pesan = $request->tgl_pesan;
    $pemesanan->total = $request->total;
    $pemesanan->save();
    return redirect()->route('admin.pemesanan')
    ->with('sukses','Data Pemesanan Sudah Terupdate');
    }
    public function destroy(PemesananModel $pemesanan)
    {
    $pemesanan->delete();
    return redirect()->route('admin.pemesanan')
    ->with('sukses','Data Pemesanan Sudah Terhapus');
    }
}
