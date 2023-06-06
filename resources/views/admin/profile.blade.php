@extends('admin.layout')

@section('title', 'Profile')

@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
  <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/admin/profile">Admin</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Dashboard</h6>
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
  <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('{{asset('img/curved-images/curved0.jpg')}}'); background-position-y: 50%;">

    <span class="mask bg-gradient-primary opacity-6"></span>
  </div>
  <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
    <div class="row gx-4">
      <div class="col-auto">
        <div class="avatar avatar-xl position-relative">
          <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
        </div>
      </div>
      
      <div class="col-auto my-auto">
        <div class="h-100">
         
        <h5 class="mb-1">
          {{ $user->name }}
        </h5>
   
    
          <p class="mb-0 font-weight-bold text-sm">
            {{ $user->status }}
          </p>
         
        </div>
      </div>
     
    </div>
    
  </div>
  <div class="container-fluid py-4">
    <div class="row">
  <div class="col-12 col-xl-40">
    <div class="card h-100">
      <div class="card-header pb-0 p-3">
        <div class="row">
          <div class="col-md-8 d-flex align-items-center">
            <h6 class="mb-0">Profile Information</h6>
          </div>
          <div class="col-md-4 text-end">
            <a href="javascript:;">
              <i class="fas fa-user-edit text-secondary text-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="card-body p-3">
        
        <hr class="horizontal gray-light my-4">
        <ul class="list-group">
          <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Full Name:</strong> &nbsp; {{ $user->name }}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; {{ $user->email }}</li>
          <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Location:</strong> &nbsp; Indonesia</li>
          <li class="list-group-item border-0 ps-0 pb-0">
            <strong class="text-dark text-sm">Social:</strong> &nbsp;
            <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
              <i class="fab fa-facebook fa-lg"></i>
            </a>
            <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
              <i class="fab fa-twitter fa-lg"></i>
            </a>
            <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="javascript:;">
              <i class="fab fa-instagram fa-lg"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
 
 
  </div>
  </div>
</main>
@endsection