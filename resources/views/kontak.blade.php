@extends('layout')

@section('title', 'Kontak')

@section('content')
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5">
                <div class="sidebar">
                   
                    
                   
                   
               
                </div>
            </div>
            <div class="col-lg-9 col-md-7">
                <div class="filter__item">
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <div class="filter__found">
                                <h6><span>9</span> Produk Kami</h6>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-3">
                            <div class="filter__option">
                                <span class="icon_grid-2x2"></span>
                                <span class="icon_ul"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($produk as $produk)
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        
                        <div class="product__item">
                           
                            <div class="product__item__pic set-bg" style="background: url('{{ asset('images/roti/1.jpeg') }}') no-repeat; background-size: 100%;">
                            {{-- data-setbg="img/product/product-1.jpg"> --}}
                                <ul class="product__item__pic__hover">
                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                    <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="#">{{ $produk->produk }}</a></h6>
                            <h5>Rp.{{ $produk->harga }}</h5>
                            </div>
                        </div>
                    </div>
                   
                 
                   
                  
                    
                   
                   
                  
                   
                    @endforeach
                </div>
               
                <div class="product__pagination">
                    <a href="#">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
