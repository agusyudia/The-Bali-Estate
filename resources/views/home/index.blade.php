<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="Keywords" content="Cars">
		<meta name="Description" content="Tasting the cars">
	<title>The Bali Estate</title>
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans" />
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		<link rel="icon" href="{{asset('image/logo.png')}}" type="image/x-icon">
		<link rel="stylesheet" href="css/cssreset-min.css"/>
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

		<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/menu.js"></script>
		<script src="https://use.fontawesome.com/f924bc844c.js"></script>
	</head>
	<body>
		<!-- Navbar -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white d-flex">
		<a class="navbar-brand justify-content-start me-auto m-4" href="/">
			<img src="{{asset('image/logo.png')}}" style="width: 40px;"> The Bali Estate
		</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	     	</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			   <ul class="navbar-nav p-2">
			      <li class="nav-item m-4">
			        <a class="nav-link" href="{{ route('property')}}">Property</a>
			      </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="{{ route('propertybaru')}}">Property Baru</a>
			      </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="{{ route('agenhome')}}">Cari Agen</a>
			      </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="{{ route('kontak')}}">Kontak Kami</a>
			     </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="#">Artikel Priperty</a>
			      </li>
			      <li class="nav-item ms-4 mt-4">
			      	<a href="#" class="nav-link btn">LOGIN</a>
			    </li>
			      <li class="nav-item mt-4">
			    	<a href="#" class="nav-link btn btn-register">REGISTER</a>
			    </li>
			   </ul>
		</div>	
	</nav>
		<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		  	<div class="carousel-indicators pb-3">
		    	<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		  	</div>
		  	<div class="carousel-inner">
		    	<div class="carousel-item active img-slider">
		      		<img src="{{asset('image/slide-1.png')}}" class="d-block w-100 img-slide" alt="">
		      		<div class="carousel-caption d-none d-md-block top-left ps-4">
			        	<h1>SELAMAT DATANG DI THE BALI ESTATE</h1>
			        	<p>The Bali Estate menyediakan Listing Eksklusif Rumah Dijual Di Bali dan Villa Dijual di Bali. Telah berpengalaman di bidang agen properti sejak 2011, saya akan membantu anda untuk menjualkan villa lokasi strategis di Bali dengan harga terbaik.</p>
			    		<a href="#" class="btn btn-register" style="width: 150px;">REGISTER</a>
			   	 	</div>
		    	</div>
		  	</div>
		</div>
		<div class="container p-3 col-7">
			<div class="row bg-dark text-white ">
				<h3 class="p-2"><b> Cari Property Terdekat</b></h3>
				<form>
					<div class="form-row d-flex">
						<div class="input-group flex-fill p-2 ms-4 me-4">
							<input type="text" class="form-control p-3" placeholder="Ketik atau pilih lokasi" aria-label="Recipient's username" aria-describedby="basic-addon2">
								<div class="input-group-append pt-2">
									<button class="btn btn-orange rounded-circle" type="button" style="right:25px;position: absolute; "><span class="fa fa-arrow-right"></span></button>
								</div>
						</div>
					</div>
					<div class="form-row d-flex pt-3 pb-3 ps-2 ms-4 me-4 text-center">
						<div class="form-group flex-fill">
							<select class="form-control bg-dark list" id="exampleFormControlSelect1">
								<option>Tempat Tinggal</option>
								<option>Dalung</option>
								<option>Kuta</option>
								<option>Seminyak</option>
								<option>Legian</option>
								<option>Jimbaran</option>
							</select>
						</div>
						<div class="form-group flex-fill ps-2">
							<select class="form-control bg-dark list" id="exampleFormControlSelect1">
								<option>Harga</option>
								<option>Rp.1.000.000</option>
								<option>Rp.5.000.000</option>
								<option>Rp.10.000.000</option>
								<option>Rp.20.000.000</option>
								<option>Rp.60.000.000</option>
								<option>Rp.80.000.000</option>
								<option>Rp.100.000.000</option>
								<option>Rp.1.000.000.000</option>
								<option>Rp.10.000.000.000</option>
								<option>Rp.100.000.000.000</option>
							</select>
						</div>
						<div class="form-group flex-fill ps-2">
							<select class="form-control bg-dark list" id="exampleFormControlSelect1">
								<option>Tempat Tidur</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
							</select>
						</div> 
					</div>
				</form>
			</div>
		</div>
	<div class="container-fluid bg-abu pt-4 pb-4">
		<div class="container pt-6 p-4 pb-3">
			<div class="row">
				<div class="p-2">
					<p style="color: #00B978;">Property Spesial</p>
					<h1><b>Spesial For You</b></h1>
				</div>


				@foreach($rumah->slice(0, 6) as $rumah)
				<div class="col-lg-4 p-3 mt-2 z-index">
					<div class="card">
						<a href="{{ route('detailproperty',$rumah->id) }}" class="nav-link item-list">
							<img src="{{ asset('image/rumah/' . $rumah->image) }}" style="width: 100%">
							<div class="card-img-overlay">
							    <p class="card-text float-end btn btn-success">{{$rumah -> status}}</p>
							</div>
							<div class="text-center pt-2">
								<h4>{{$rumah -> judul}}</h4>
							</div>
							<div class="card-body">
								<p>Deskrispsi :</p>
								<p style="max-height: 250px; ">{{$rumah -> ket_produk}}</p>
								<p>Harga :<i>@currency($rumah -> harga)</i></p>
							</div>
						</a>
					</div>
				</div>
				@endforeach


				<div class="text-center">
					<a href="#" class="btn btn-blue">See All...</a>
				</div>
			</div>
		</div>
	</div>
		<div class="container pt-4">
			<div class="row text-center">
				<div class="text-center">
					<h1>Layanan Kami</h1>
					<p>Ketika datang ke the bali estate, kami senang di setiap langkah yang kamu ambil.</p>
				</div>
					<div class="col-lg-4 p-3 rounded-3">
						<div class="p-4 card">
							<span class="icon fa fa-home orange"></span>
							<h3>Home For Families</h3>
							<p>Rent a beautiful home for your family Chose from flats is societies and individual apartments</p>
						</div>
					</div>
					<div class="col-lg-4 p-3 rounded-3">
						<div class="p-4 card">
							<span class="icon fa fa-briefcase blue"></span>
							<h3>Home For Bachelor</h3>
							<p>Rent a beautiful home for your family Chose from flats is societies and individual apartments</p>
						</div>
					</div>
					<div class="col-lg-4 p-3 rounded-3">
						<div class="p-4 card">
							<span class="icon fa fa-link green"></span>
							<h3>Networking</h3>
							<p>Rent a beautiful home for your family Chose from flats is societies and individual apartments</p>
						</div>
					</div>
			</div>
		</div>
			<div class="container pt-4 pb-4">
				<div class="row p-4">
					<h1>Property Di Kota Dan Provinsi Di Indonesia</h1>
						<div class="col-3 p-4">
							<a href="#" class="nav-link item">Jakarta Pusat</a>
							<a href="#" class="nav-link item">Bekasi</a>
							<a href="#" class="nav-link item">Bali</a>
							<a href="#" class="nav-link item">Medan</a>
							<a href="#" class="nav-link item">Balikpapan</a>
							<a href="#" class="nav-link item">Jakarta Timur</a>
						</div>
						<div class="col-3 p-4">
							<a href="#" class="nav-link item">Jakarta Selatan</a>
							<a href="#" class="nav-link item">Bandung</a>
							<a href="#" class="nav-link item">Semarang</a>
							<a href="#" class="nav-link item">Palembang</a>
							<a href="#" class="nav-link item">Samarinda</a>
							<a href="#" class="nav-link item">Tanggerang Selatan</a>
						</div>	
						<div class="col-3 p-4">
							<a href="#" class="nav-link item">Jakarta Utara</a>
							<a href="#" class="nav-link item">Depok</a>
							<a href="#" class="nav-link item">Surabaya</a>
							<a href="#" class="nav-link item">Batam</a>
							<a href="#" class="nav-link item">Pontianak</a>
							<a href="#" class="nav-link item">Banjarmasin</a>
						</div>	
						<div class="col-3 p-4">
							<a href="#" class="nav-link item">Jakarta Barat</a>
							<a href="#" class="nav-link item">Bogor</a>
							<a href="#" class="nav-link item">Yogyakarta</a>
							<a href="#" class="nav-link item">Pekanbaru</a>
							<a href="#" class="nav-link item">Banjarmasin</a>
							<a href="#" class="nav-link item">Karawang</a>
						</div>
				</div>
			</div>
			
			<div class="container-fluid bg-abu">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 pt-4 pb-4 p-4">
							<h1>THE BALI ESTATE</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
							<form>
							<div class="form-row d-flex">
								<div class="input-group flex-fill me-3">
									<input type="text" class="form-control p-3" placeholder="Masukan Email Anda" aria-label="Recipient's username" aria-describedby="basic-addon2">
									<div class="input-group-append">
										<button class="btn btn-orange p-3" type="button"><span class="fa fa-send"></span></button>
									</div>
								</div>
							</div>
							</form>
						</div>
						<div class="col-lg-6 d-flex item">
						<div class="pt-4 pb-4 p-2 flex-fill">
							<h5><b>About</b></h5>
							<a href="#" class="nav-link item">Home</a>
							<a href="#" class="nav-link item">Tentang Kami</a>
							<a href="#" class="nav-link item">Kontak Kami</a>
							<a href="#" class="nav-link item">Sidemap</a>
						</div>
						<div class="pt-4 pb-4 p-2 flex-fill">
							<h5><b>Service</b></h5>
							<a href="#" class="nav-link item">Mintenance</a>
							<a href="#" class="nav-link item">Request</a>
							<a href="#" class="nav-link item">Keep</a>
							<a href="#" class="nav-link item">FAQ</a>
						</div>
						<div class="pt-4 pb-4 p-2 flex-fill">
							<h5><b>Product</b></h5>
							<a href="#" class="nav-link item">House</a>
							<a href="#" class="nav-link item">Tanah</a>
							<a href="#" class="nav-link item">Apartment</a>
							<a href="#" class="nav-link item">Hotel</a>
							<a href="#" class="nav-link item">Villa</a>
						</div>
						</div>
						<span class="d-flex justify-content-center">Developed and Optimized by Agus Yudi | &copy 2021 The Bali Estate, All Rights Reserved</span>
					</div>
				</div>
			</div>
		



	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
	</body>
</html>




