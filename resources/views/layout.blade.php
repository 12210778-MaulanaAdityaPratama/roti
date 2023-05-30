<!DOCTYPE html>
<html>
<head>
    <title>@yield('title') - Nama Aplikasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/elegant-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/nice-select.css') }}" rel="stylesheet">
    <link href="{{ asset('css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slicknav.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    
    {{-- <header>
        <nav>
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="/tentang">Tentang</a></li>
                <li><a href="/kontak">Kontak</a></li>
            </ul>
        </nav>
    </header> --}}
    {{--  --}}
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> rotigembul@gmail.com</li>
                                <li>ASLI PONTIANAK</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">
                                <a href="/login"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html">
                            <img src="{{ asset('images/gembul.jpg') }}" alt=""
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="/">Home</a></li>
                            <li class="{{ Request::is('kontak') ? 'active' : '' }}"><a href="/kontak">Menu</a></li>
                            <li class="{{ Request::is('tentang') ? 'active' : '' }}"><a href="/tentang">About Us</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>Rp.150.000</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="{{ asset('images/gembul.jpg') }}"> <img src="{{ asset('images/gembul.jpg') }}" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: Jl. Sungai Raya Dalam No.2 No. 41, Bangka Belitung Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112</li>
                            <li>Phone: 0812-3000-0990</li>
                            <li>Email: rotigembul@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Anda Mungkin Suka</h6>
                        <ul>
                            <li><a href="#">Sobat Gembul</a></li>
                            <li><a href="#">Review</a></li>
                            <li><a href="#">Product</a></li>
                            <li><a href="#">Promo Ceria</a></li>
                            <li><a href="#">Hampers</a></li>
                            <li><a href="#">Bagi-Bagi Emas</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Give Away</a></li>
                            <li><a href="#">Sorotan</a></li>
                            <li><a href="#">Snack Box</a></li>
                            <li><a href="#">Jam Tertentu</a></li>
                            <li><a href="#">Donut Gembul</a></li>
                            <li><a href="#">Ramadhan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Ikuti Kami Sekarang</h6>
                        <p>Dapatkan Seputar Update Dari Menu Kami.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved </a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
</body>
</html>