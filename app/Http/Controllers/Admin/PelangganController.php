<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PelangganController extends Controller
{
    public function index()
    {
        if (!Auth::user()->isAdmin()) {
            return redirect('/user/dashboard');
        }
        $data['pelanggan'] = User::orderBy('id','desc')->paginate(5);
        return view('admin.pelanggan.pelanggan',$data)->with('title', 'Pelanggan');
    }

    public function create()
    {
    return view('admin.pelanggan.create');
    }

    public function store(Request $request)
    {
    $request->validate([
    'name' => 'required',
    'email' => 'required',
    'password' => 'required'
    ]);
    $password = $request->input('password');
    $hashedPassword = bcrypt($password);

    $pelanggan = new User();
    $pelanggan->name = $request->name;
    $pelanggan->email = $request->email;
    $pelanggan->password = $hashedPassword;
    $pelanggan->status = $request->status;

    $pelanggan->save();
    return redirect()->route('admin.pelanggan')
    ->with('sukses','Data Pelanggan Tersimpan.');
    }

    public function show(User $pelanggan)
    {
    return view('admin.pelanggan.show',compact('pelanggan'));
    } 

    public function edit(User $pelanggan)
    {
    return view('admin.pelanggan.edit',compact('pelanggan'));
    }

    public function update(Request $request, $id)
    {
    $request->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ]);
    $password = $request->input('password');
    $hashedPassword = bcrypt($password);
    $pelanggan = User::find($id);
    $pelanggan->name = $request->name;
    $pelanggan->email = $request->email;
    $pelanggan->password = $hashedPassword;
    $pelanggan->status = $request->status;
    $pelanggan->save();
    return redirect()->route('admin.pelanggan')
    ->with('sukses','Data Pelanggan Sudah Terupdate');
    }

    public function destroy(User $pelanggan)
    {
    $pelanggan->delete();
    return redirect()->route('admin.pelanggan')
    ->with('sukses','Data Pelanggan Sudah Terhapus');
    }
}
