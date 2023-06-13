<html>
	<head>
		<meta charset="utf-8">
		<title>Invoice</title>
		<link rel="stylesheet" href="style.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
        <link href="{{ asset('css/invoice.css') }}" rel="stylesheet">
        <script src="{{ asset('js/invoice.js') }}"></script>
	</head>
	<body>
        @php
    $totalHarga = 0;
@endphp
		<header>
            
			<h1>Invoice</h1>
            
			<address >
                <img src="{{ asset ('images/gembul.jpg')}}" class="navbar-brand-img h-100" alt="main_logo">
				<p>Roti Gembul</p>
				<p>Jl. Sungai Raya Dalam No.2 No. 41, Bangka Belitung Darat, Kec. Pontianak Tenggara, Kota Pontianak, Kalimantan Barat 78112</p>
				<p>0812-3000-0990</p>
                
			</address>
            
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address >
                @foreach ($userproduk as $name)
                @endforeach

				<p>Pesanan a/n<br>{{ $name->user->name }}</p>
               
			</address>
			<table class="meta">
                @foreach ($userproduk as $produk)
                
@endforeach
				<tr>
					<th><span >Invoice #</span></th>
					<td><span >{{ $produk->users_id }}</span></td>
                    
				</tr>
                
				<tr>
                    
					<th><span >Date</span></th>
					<td><span >{{ $produk->created_at }}</span></td>
				</tr>
				<tr>
					
				</tr>
                
			</table>
			<table class="inventory">
				<thead>
					<tr>
                       
						<th><span >Produk</span></th>
						<th><span >Harga</span></th>
						<th><span >Jumlah</span></th>
						<th><span >Total</span></th>
						
					</tr>
				</thead>
				<tbody>
					<tr>
                        @foreach ($userproduk as $item)
                        @php
$hargaPerBarang = $item->data_produk->harga;
$stok = $item->jumlah;
$subtotal = $hargaPerBarang * $stok;
$totalHarga += $subtotal;
@endphp
						<td><span >{{ $item->data_produk->produk }}</span></td>
						<td><span >Rp. {{ $item->data_produk->harga }}</span></td>
						<td><span >{{ $item->jumlah }}</span></td>
						<td><span >Rp. {{ $subtotal }}</span></td>
						
					</tr>
				</tbody>
                @endforeach
			</table>
			<a class="add">+</a>
			<table class="balance">
				<tr>
                    @php
$ppn = $totalHarga * 0.15;
$totalHargaWithPPN = $totalHarga + $ppn;
@endphp

					<th><span >Total</span></th>
					<td><span>Rp.{{ $totalHarga }}</span></td>
				</tr>
				<tr>
                    <th><span>PPN (15%)</span></th>
                    <td><span>Rp.{{ $ppn }}</span></td>
                </tr>
                <tr>
                    <th><span>Total Harga + PPN</span></th>
                    <td><span>Rp.{{ $totalHargaWithPPN }}</span></td>
                </tr>
			</table>
           
		</article>
		<aside>
			<h1><span >Additional Notes</span></h1>
			<div >
				<p>Untuk memastikan proses pesanan yang lancar, mohon segera melakukan pembayaran dalam waktu 15 menit. Pesanan yang tidak dibayarkan akan dibatalkan.</p>
			</div>
		</aside>
	</body>
</html>