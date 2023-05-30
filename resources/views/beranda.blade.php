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
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background: url('{{ asset('images/roti/1.jpeg') }}') no-repeat; background-size: 100%;">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Sweetbul chocomathine</a></h6>
                            <h5>Rp.17.000</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix vegetables fastfood">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background: url('{{ asset('images/roti/2.jpeg') }}') no-repeat; background-size: 100%;">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Keju Susu</a></h6>
                            <h5>Rp.17.000</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background: url('{{ asset('images/roti/3.jpeg') }}') no-repeat; background-size: 100%;">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Original</a></h6>
                            <h5>Rp.10.000</h5>
                        </div>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" style="background: url('{{ asset('images/roti/4.jpeg') }}') no-repeat; background-size: 100%;">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#">Tiramisu</a></h6>
                            <h5>Rp.16.000</h5>
                        </div>
                    </div>
                    
                </div>
                
               
               
               
                </div>
            </div>
        </div>
    </section>
@endsection