@extends('admin.layout')

@section('title', 'Pemesanan')

@section('content')
@php
    $totalHarga = 0;
@endphp
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/profile">Admin</a></li>
          <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Data Pemesanan</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Data Pemesanan</h6>
      </nav>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
          </div>
        </div>
        <ul class="navbar-nav  justify-content-end">
         
          <form action="{{ route('logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="nav-link text-body font-weight-bold px-0">
                <i class="fa fa-sign-out me-sm-1"></i>
                <span class="d-sm-inline d-none">Logout</span>
            </button>
        </form>
        
         
          
          
        </ul>
      </div>
    </div>
  </nav>
  
<div class="container-fluid py-4">
  
  
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Pemesanan Table</h6>
          <a class="btn btn-success" href="{{ route('pemesanan.create') }}">Tambah Data Pemesanan</a>
          
        </div>
        @if ($message = Session::get('sukses'))
<div class="alert alert-success badge badge-sm  ">
<p>{{ $message }}</p>
</div>
@endif
        
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Produk</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Beli</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal Pemesanan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Total</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($userproduk as $index => $userproduk)
                @php
                $no = $index + 1;
             @endphp
                @php
    $hargaPerBarang = $userproduk->data_produk->harga;
    $stok = $userproduk->jumlah;
    $subtotal = $hargaPerBarang * $stok;
    $totalHarga += $subtotal;
    @endphp

                <tr>
                  <td>
                    
                    <div class="d-flex px-2 py-1">
                     
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">{{$no}}</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs font-weight-bold mb-0">{{ $userproduk->user->name }}</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">{{ $userproduk->data_produk->produk }}</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">{{ $userproduk->jumlah }}</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">{{ $userproduk->created_at }}</span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-secondary text-xs font-weight-bold">Rp.{{ $subtotal }}</span>
                  </td>
                 
                 
                
                 
                  
                  <form action="{{ route('pemesanan.destroy',$userproduk->id) }}" method="Post">
                  <td class="align-middle">
                    <a class="text-danger font-weight-bold text-xs p-1 mb-2 bg-info text-white" href="{{ route('pemesanan.edit',$userproduk->id) }}">
                      Edit
                    </a>
                  </td>
                  
                  @csrf
                  @method('DELETE') 
                   <td class="align-middle">
                    <button type="submit", class=" text-danger font-weight-bold text-xs p-1 mb-2 bg-danger text-white"
                    title="Hapus ID: {{ $userproduk->id }}">
                      Hapus
                    </a>
                   

                  </td>
                  </form>
                </tr>
               
                @endforeach
               
                
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</main>


@endsection