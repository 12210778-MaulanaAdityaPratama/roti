@extends('layout')

@section('title', 'Beranda')

@section('content')

    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="hero__item" style="background: url('{{ asset('images/hero/gembul.jpg') }}') no-repeat; background-size: cover;">
                        <div class="hero__text">
                        <span>ROTI GEMBUL</span>
                        <h2>Green Tea <br />Asli Pontianak</h2>
                        <a href="#" class="primary-btn">BELI SEKARANG</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>TOP SELLER</h2>
                    </div>
                   
                </div>
            </div>
            <div class="row featured__filter">
                @foreach ($produk as $produk)
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background: url('{{ Storage::url(''.$produk->foto) }}') no-repeat; background-size: 100%;">
                            <ul class="featured__item__pic__hover">
                                <form action="{{ route('tambah-produk') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="produk_id" value="{{ $produk->id }}">
                                <li>
                                    {{-- <i class="fa fa-shopping-cart"></i></a> --}}
                                    <button class="fa fa-shopping-cart" type="submit"> Tambahkan ke Keranjang</button>
                                </li>
                            </ul>
                        </form>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">{{ $produk->produk }}</a></h6>
                            <h5>Rp.{{ $produk->harga }}</h5>
                        </div>
                        
                    </div>
                    
                    
                </div>
                
                @endforeach
                
                
               
                
                
                
               
               
               
                </div>
               
                
            </div>
            
        </div>
        
    </section>
    
@endsection