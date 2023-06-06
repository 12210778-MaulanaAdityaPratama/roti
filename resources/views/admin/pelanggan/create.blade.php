@extends('admin.layout')

@section('title', 'CreatePelanggan')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

  
<div class="container-fluid py-4">
  
  
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <a class="btn btn-primary" href="{{ route('admin.pelanggan') }}" enctype="multipart/form-data"> Kembali</a>
        <div class="card-header pb-0">
          <h6>Tambah Data Pelanggan</h6>
        
        </div>
        @if(session('status'))
<div class="alert alert-success mb-1 mt-1">
{{ session('status') }}
</div>
@endif
        
        <div class="card-body">
          <form action="{{ route('pelanggan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
              <label>Nama</label>
              <div class="mb-3">
                <input type="text" class="form-control" name="name" aria-label="text" aria-describedby="text-addon">
                @error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
              </div>
              <label>Email</label>
              <div class="mb-3">
                <input type="email" class="form-control" name="email" aria-label="email" aria-describedby="email-addon">
                @error('email')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
              </div>
              <label>Password</label>
              <div class="mb-3">
                <input type="password" class="form-control" name="password" aria-label="password" aria-describedby="password-addon">
                @error('password')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
              </div>
              <div class="mb-3">
                <select class="form-control" name="status" aria-label="status" aria-describedby="status-addon">
                  <option value="admin">admin</option>
                  <option value="user">user</option>
              </select>
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