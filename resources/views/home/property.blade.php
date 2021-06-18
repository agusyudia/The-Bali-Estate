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
	<div class="container-fluid content bg-abu">
		<div class="container">
			<div class="row p-4">
				<h3 class="p-2 ms-4"><b> Cari Property Terdekat</b></h3>
				<form>
					<div class="form-row d-flex">
						<div class="input-group flex-fill p-2 ms-4">
							<input type="text" class="form-control p-3" placeholder="Ketik atau pilih lokasi" aria-label="Recipient's username" aria-describedby="basic-addon2">
							<div class="form-group">
								<select class="form-control p-3" id="exampleFormControlSelect1">
									<option>Segala Tipe</option>
									<option>Villa</option>
									<option>Rumah</option>
									<option>Apartement</option>
									<option>Tanah</option>
									<option>Gudang</option>
								</select>
							</div>
							<div class="form-group">
								<select class="form-control p-3" id="exampleFormControlSelect1">
									<option>Mulai Dari</option>
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
							<div class="form-group">
								<select class="form-control p-3" id="exampleFormControlSelect1">
									<option>Tahun Selesai</option>
									<option>2021</option>
									<option>2020</option>
									<option>2019</option>
									<option>2018</option>
									<option>2017</option>
									<option>2016</option>
									<option>2015</option>
								</select>
							</div>
							<div class="input-group-append">
								<button class="btn btn-orange p-3" type="button">Cari!</button>
							</div>
						</div>	
					</div>
				</form>
			</div>
		</div>	
	</div>
	<div class="container pt-4 pb-4">
		<div class="row">
			<div class="p-2">
				<p style="color: #00B978;">Our Property</p>
				<h1><b>Type Of Property We Have</b></h1>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="{{asset('image/apart.png')}}" style="max-width:50%; margin: auto;">
					<h3>Apartement</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="{{asset('image/home-2.png')}}" style="max-width:50%; margin: auto;">
					<h3>Villas</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="{{asset('image/home-4.png')}}" style="max-width:50%; margin: auto;">
					<h3>House</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="{{asset('image/home-3.png')}}" style="max-width:50%; margin: auto;">
					<h3>Hotel</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid bg-abu pt-4">
		<div class="container">
			<div class="row p-3">
				<div class="p-2">
					<p style="color: #00B978;">Property</p>
					<h1><b>Populer Property</b></h1>
				</div>
				@foreach($rumah->slice(0, 6) as $rumah)
				<div class="col-lg-6 pt-2">
					<div class="card">
					  	<div class="row g-0 rounded-3">
					    	<div class="col-md-4">
					     	 	<img src="{{ asset('image/rumah/' . $rumah->image) }}" style="width: 100%">
					    	</div>
					    	<div class="col-md-8">
					    		<a href="" class="nav-link item-list">
						      		<div class="card-body p-0 ps-2 pt-2 p-1">
						        		<h5 class="card-title"><b>{{$rumah -> judul}}</b></h5>
						        		<p class="card-text">{{$rumah -> ket_produk}}</p>
						        		<p class="card-text"><span class="bg-green-card pt-1 pb-1 ps-3 pe-3">House</span><span class="bg-red-card pt-1 pb-1 ps-3 pe-3">Promo</span></p>
						        		<p class="card-text">@currency($rumah -> harga)</p>
						      		</div>
					      		</a>
					    	</div>
					  	</div>
					</div>
				</div>
				@endforeach
				<div class="text-center p-4">
					<a href="#" class="btn btn-blue">See All...</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container p-4">
		<div class="row">
			<div class="col-lg-6">
				<img src="{{asset('image/bg-3.png')}}" style="max-width: 100%;">
			</div>
			<div class="col-lg-6 pt-4">
				<h1 class="pt-4">Kita Memberikan Sesuatu yang bagus</h1>
				<p class="pt-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<a href="#" class="btn btn-register justify-content-end" style="width: 150px;">Selengkapnya...</a>
			</div>
		</div>
	</div>
	<div class="container-fluid pt-4 pb-4">
		<div class="container">
			<div class="row p-2">
				<div class="p-2">
					<p style="color: #00B978;">Jelajahi Property</p>
					<h1><b>Jelajahi Property Di Indonesia </b></h1>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img1.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Bogor</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img2.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jakarta Timur</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img3.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jakarta</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img4.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jawa Tengah</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img5.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jogja</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img6.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Malang</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img7.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Kalimantan</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="{{asset('image/cont/img8.png')}}" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Bali</h3>
						</div>
					</a>
				</div>
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
						<div class="col-lg-6 d-flex">
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




