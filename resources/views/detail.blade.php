@extends('layout')

@section('title', 'Detail')

@section('content')
@php
    $totalHarga = 0;
@endphp

<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        
                        <thead>
                            <tr>
                                <th class="shoping__product">Produk</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($userproduk as $userproduk)
                                @php
    $hargaPerBarang = $userproduk->data_produk->harga;
    $stok = $userproduk->jumlah;
    $subtotal = $hargaPerBarang * $stok;
    $totalHarga += $subtotal;
@endphp
                                <td class="shoping__cart__item">
                                    <img src="img/cart/cart-1.jpg" alt="">
                                    <h5>{{ $userproduk->data_produk->produk }}</h5>
                                </td>
                                <td class="shoping__cart__price">Rp.
                                    {{ $userproduk->data_produk->harga }}
                                </td>
                                <td class="shoping__cart__quantity">
                                    <h5>{{ $userproduk->jumlah }}</h5>
                                </td>
                                <td class="shoping__cart__total">
                                   <h5>Rp.{{ $subtotal }}</h5>
                                </td>
                                <td class="shoping__cart__item__close">
                                    <span class="icon_close"></span>
                                </td>
                            </tr>
                           
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="/kontak" class="primary-btn cart-btn cart-btn-right">CONTINUE SHOPPING</a>

                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Total Harga</h5>
                    <ul>
                        
                        <li>Total <span>Rp.{{ $totalHarga }}</span></li>
                    </ul>
                    
                    <a href="/invoice" target="_blank" class="primary-btn">PROCEED TO CHECKOUT</a>
                    
                </div>
            </div>
        </div>
    </div>
</section>















@endsection