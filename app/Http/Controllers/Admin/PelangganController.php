<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\PelangganModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PelangganController extends Controller
{
    public function index()
    {
        $data['pelanggan'] = PelangganModel::orderBy('id','desc')->paginate(5);
        return view('admin.pelanggan.pelanggan',$data)->with('title', 'Pelanggan');
    }

    public function create()
    {
    return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
    $request->validate([
    'nama' => 'required',
    'email' => 'required',
    'alamat' => 'required'
    ]);
    $pelanggan = new PelangganModel();
    $pelanggan->no = $request->no;
    $pelanggan->kode = $request->kode;
    $pelanggan->nama = $request->nama;
    $pelanggan->email = $request->email;
    $pelanggan->no_telp = $request->no_telp;
    $pelanggan->alamat = $request->alamat;
    $pelanggan->username = $request->username;
    $pelanggan->save();
    return redirect()->route('admin.pelanggan')
    ->with('sukses','Data Pelanggan Tersimpan.');
    }

    public function show(PelangganModel $pelanggan)
    {
    return view('admin.pelanggan.show',compact('pelanggan'));
    } 

    public function edit(PelangganModel $pelanggan)
    {
    return view('admin.pelanggan.edit',compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
    'nama' => 'required',
    'email' => 'required',
    'alamat' => 'required',
    ]);
    $pelanggan = PelangganModel::find($id);
    $pelanggan->no = $request->no;
    $pelanggan->kode = $request->kode;
    $pelanggan->nama = $request->nama;
    $pelanggan->email = $request->email;
    $pelanggan->no_telp = $request->no_telp;
    $pelanggan->alamat = $request->alamat;
    $pelanggan->username = $request->username;
    $pelanggan->save();
    return redirect()->route('admin.pelanggan')
    ->with('sukses','Data Pelanggan Sudah Terupdate');
    }

    public function destroy(PelangganModel $pelanggan)
    {
    $pelanggan->delete();
    return redirect()->route('admin.pelanggan')
    ->with('sukses','Data Pelanggan Sudah Terhapus');
    }
}
