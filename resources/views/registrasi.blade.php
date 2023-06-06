@extends('layout')
@section('title', 'Registrasi')

@section('content')
<!-- Pills navs -->
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link " id="tab-login" data-mdb-toggle="pill" href="/login" role="tab"
            aria-controls="pills-login" aria-selected="true">Login</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
            aria-controls="pills-register" aria-selected="false">Register</a>
        </li>
      </ul>
      <div class="tab-content">
        
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
          <form action="{{ route('registrasi') }}" method="POST">
            @csrf
      
      
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="text" id="name" name="name" class="form-control" />
              <label class="form-label" for="name">Nama</label>
            </div>
            <div class="form-outline mb-4">
                <input type="email" id="email" name="email" class="form-control" />
                <label class="form-label" for="name">Email</label>
              </div>
      
             {{-- Password input  --}}
             <div class="form-outline mb-4">
              <input type="password" id="password" name="password" class="form-control" />
              <label class="form-label" for="password">Password</label>
            </div> 
            <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
        </form>
    </div>
  </div>


    @endsection