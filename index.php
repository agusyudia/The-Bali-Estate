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
		<link rel="icon" href="assets/img/logo.png" type="image/x-icon">
		<link rel="stylesheet" href="css/cssreset-min.css"/>
		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

		<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="assets/js/menu.js"></script>
		<script src="https://use.fontawesome.com/f924bc844c.js"></script>
	</head>
	<body>

		<!-- Navbar -->
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-white d-flex">
		<a class="navbar-brand justify-content-start me-auto m-4" href="index.php">
			<img src="assets/img/logo.png" style="width: 40px;"> The Bali Estate
		</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="navbar-toggler-icon"></span>
	     	</button>
		<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			   <ul class="navbar-nav p-2">
			      <li class="nav-item m-4">
			        <a class="nav-link" href="?page=index&aksi=property">Property</a>
			      </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="?page=index&aksi=property-baru">Property Baru</a>
			      </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="?page=index&aksi=agen">Cari Agen</a>
			      </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="?page=index&aksi=kontak">Kontak Kami</a>
			     </li>
			      <li class="nav-item m-4">
			        <a class="nav-link" href="#">Artikel Priperty</a>
			      </li>
			   </ul>
		</div>	
	</nav>
		<div class="container-fluid">
			<?php 
                include 'koneksi/db.php';
                //error_reporting(0);
                $page = $_GET['page'];
                $aksi = $_GET['aksi'];    
                        if ($page == "index") {
                          if ($aksi == "property") {
                            include "property.php";
                          }else if ($aksi == "property-baru") {
                            include "property-baru.php";
                          }else if ($aksi == "property-detail") {
                            include "detail-property.php";
                          }else if ($aksi == "agen") {
                            include "agen.php";
                          }else if ($aksi == "agen-detail") {
                            include "agen-detail.php";
                          }else if ($aksi == "kontak") {
                            include "kontak.php";
                          }else if ($aksi == "delete") {
                            include "agen-delete.php";
                          }
                        }
                        else{
                            include "home.php";
                        }
                ?>
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
							<a href="register.php" class="nav-link item">Register</a>
							<a href="login.php" class="nav-link item">Login</a>
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




