@extends('admin.layout')

@section('title', 'CreatePemesanan')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

  
<div class="container-fluid py-4">
  
  
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <a class="btn btn-primary" href="{{ route('admin.pemesanan') }}" enctype="multipart/form-data"> Kembali</a>
        <div class="card-header pb-0">
          <h6>Tambah Data Pemesanan</h6>
        
        </div>
        @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
        
        <div class="card-body">
          <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label>Produk</label>
            <div class="mb-3">
                <select class="form-control" name="produk_id" aria-label="text" aria-describedby="text-addon">
                    @foreach ($produk as $item)
                        <option value="{{ $item->id }}">{{ $item->produk }}</option>
                    @endforeach
                </select>
                @error('produk_id')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            <label>User Id</label>
            <div class="mb-3">
                <select class="form-control" name="users_id">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('users_id')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
            </div>
            
              <label>Jumlah</label>
              <div class="mb-3">
                <input type="text" class="form-control" name="jumlah" aria-label="text" aria-describedby="text-addon">
                @error('jumlah')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
              </div>
              
             
             
            
               
              <div class="text-center">
                <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Tambah Data</button>
              </div>
            </form>
          </div>
      </div>
    </div>
  </div>
</div>
</main>


@endsection