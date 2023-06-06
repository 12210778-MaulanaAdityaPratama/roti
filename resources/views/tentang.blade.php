@extends('layout')

@section('title', 'Tentang')

@section('content')
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_phone"></span>
                    <h4>Phone</h4>
                    <p>0812-3000-0990</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_pin_alt"></span>
                    <h4>Address</h4>
                    <p>Jl. Sungai Raya Dalam No.2 No. 41, Bangka Belitung Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_clock_alt"></span>
                    <h4>Open time</h4>
                    <p>08:00 am to 22:00 pm</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                <div class="contact__widget">
                    <span class="icon_mail_alt"></span>
                    <h4>Email</h4>
                    <p>rotigembul@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.8144768128136!2d109.35266977571743!3d-0.07952913549926047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e1d5a17f9c588cf%3A0x3772cb1c6722fad9!2sRoti%20Gembul%20-%20Outlet%20Serdam!5e0!3m2!1sid!2sid!4v1686070164854!5m2!1sid!2sid"
     width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   
</div>

@endsection