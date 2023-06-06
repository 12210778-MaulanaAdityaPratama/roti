@extends('user.layout')

@section('title', 'Edit')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

  
    <div class="container-fluid py-4">
      
      
    <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <a class="btn btn-primary" href="{{ route('user.pemesanan') }}" enctype="multipart/form-data"> Kembali</a>
            <div class="card-header pb-0">
    
              <h6>Edit Pemesanan</h6>
            
            </div>
            
            <div class="card-body">
                <form action="{{ route('pemesanan.update',$pemesanan->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
    @method('PUT')
    <div class="mb-3">
      <label for="produk_id">Produk</label>
      <select class="form-control" name="produk_id" id="produk_id">
          @foreach ($data['produk'] as $item)
              <option value="{{ $item->id }}" {{ $item->id == $pemesanan->produk_id ? 'selected' : '' }}>
                  {{ $item->produk }}
              </option>
          @endforeach
      </select>
      @error('produk_id')
          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
      @enderror
    </div>
                  
                  
                  <label>Jumlah</label>
                  <div class="mb-3">
                    <input type="text" class="form-control" name="jumlah" value="{{ $pemesanan->jumlah }}" aria-label="text" aria-describedby="text-addon">
                    @error('jumlah')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                  </div>
                  
                 
                  
                 
                
                     
                  <div class="text-center">
                    <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Submit</button>
                  </div>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    </main>

@endsection