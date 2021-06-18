

	<div class="container-fluid content bg-abu">
		<div class="container">
			<div class="row p-4">
				<h3 class="p-2 ms-4"><b> Cari Property Terdekat</b></h3>
				<form action="" method="post">
					<div class="form-row d-flex">
						<div class="input-group flex-fill p-2 ms-4">
							<input type="text" class="form-control p-3" placeholder="Ketik atau pilih lokasi" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search" value="<?php if(isset($_POST['search'])){ echo $_POST['search'];} ?>">
							<div class="input-group-append">
								<button class="btn btn-orange p-3" type="submit" name="submit">Cari!</button>
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
					<img src="assets/img/apart.png" style="max-width:50%; margin: auto;">
					<h3>Apartement</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="assets/img/home-2.png" style="max-width:50%; margin: auto;">
					<h3>Villas</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="assets/img/home-4.png" style="max-width:50%; margin: auto;">
					<h3>House</h3>
					<p style="color: #00B978;">100 Listing</p>
				</div>
			</div>
			<div class="col-lg-3 p-3 radius15 text-center">
				<div class="p-3 card">
					<img src="assets/img/home-3.png" style="max-width:50%; margin: auto;">
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
					<form method="post">
						<div class="form-row d-flex justify-content-center p-3">
							<div class="form-group col-md-3">
								<select name="tipe" class="form-control p-3" id="exampleFormControlSelect1">
									<option value="2">Villa</option>
									<option value="1">Rumah</option>
									<option value="4">Apartement</option>
									<option value="3">Tanah</option> 
									<option value="5">Gudang</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<select name="harga" class="form-control p-3" id="exampleFormControlSelect1">
									<option value="1">Termurah</option>
									<option value="2">Termahal</option>
								</select>
							</div>
							<div class="form-group col-md-3">
								<select name="status" class="form-control p-3" id="exampleFormControlSelect1">
									<option value="1">Dijual</option>
									<option value="2">Disewakan</option>
								</select>
							</div>
							<button class="btn btn-orange p-3" type="submit" name="filter">Cari!</button>
						</div> 
					</form>
					<?php
					if (isset($_POST['search'])) {
						$filter = $_POST['search'];
						$perintah = "SELECT * FROM tb_produk WHERE CONCAT(lokasi,harga,judul,status,jenis_property,ket_produk) LIKE '%$filter%'";

                    	$query = mysqli_query($conn, $perintah);
                    	if (mysqli_num_rows($query) > 0) {
                    		foreach ($query as $data ) {
		                    	$angka=$data['harga'];
								$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
                    			if ($data['jenis_property']=='1') {
							  		$datapro='Rumah';
							  	}else if ($data['jenis_property']=='2') {
							  		$datapro='Villa';
							  	}else if ($data['jenis_property']=='3') {
							  		$datapro='Tanah';
							  	}else if ($data['jenis_property']=='4') {
							  		$datapro='Apartment';
							  	}else{
							  		$datapro='Hotel';
							  	}
                    ?>
						<div class="col-lg-6 pt-2">
							<div class="card">
							  	<div class="row g-0 rounded-3">
							    	<div class="col-md-4">
							     	 	<img src="assets/img/upload/<?php echo $data['foto']; ?>" style="width: 100%">
							    	</div>
							    	<div class="col-md-8">
							    		<a href="?page=index&aksi=property-detail&id=<?php echo $data['id']; ?>" class="nav-link item-list">
								      		<div class="card-body p-0 ps-2 pt-2">
								        		<h5 class="card-title"><b><?php echo $data['judul']; ?></b></h5>
								        		<small class="fa fa-map"></small> <?php echo $data['lokasi']; ?>
								        		<p class="card-text"><?php echo $data['ket_produk']; ?></p>
								        		<p class="card-text"><span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro; ?></span><span class="bg-red-card pt-1 pb-1 ps-3 pe-3"><?php echo $data['status']; ?></span></p>
								        		<p class="card-text"><?php echo $hasil_rupiah; ?></p>
								      		</div>
							      		</a>
							    	</div>
							  	</div>
							</div>
						</div>
                    	<?php
                    }
                }else{
					echo '
            		<div class="alert alert-danger alert-dismissible w-100" role="alert">
			            <i class="fa fa-times-circle"></i> Maaf Property Yang Anda Cari Tidak Ada!
			        </div>
						          ';
                }
            } else if (isset($_POST['filter'])) {
            	include 'koneksi/db.php';
            	$tipe = $_POST['tipe'];
            	$harga = $_POST['harga'];
            	$status = $_POST['status'];

            	if (empty($tipe) || empty($harga) || empty($status)) {
            		echo " <script>alert('Failed, Data Anda tidak lengkap')</script> ";
            		$perintah = "SELECT * FROM tb_produk WHERE status_agen='1'";
            	} else if ($harga == '1') {
            		if ($status == '1') {
            			if ($tipe == '1') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '1' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '2') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '2' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '3') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '3' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '4') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '4' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '5') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '5' AND status_agen='1' ORDER BY harga ASC";
            			}
            		} else if ($status == '2') {
            			if ($tipe == '1') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '1' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '2') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '2' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '3') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '3' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '4') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '4' AND status_agen='1' ORDER BY harga ASC";
            			} else if ($tipe == '5') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '5' AND status_agen='1' ORDER BY harga ASC";
            			}
            		}
            	} else if ($harga == '2') {
            		if ($status == '1') {
            			if ($tipe == '1') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '1' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '2') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '2' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '3') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '3' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '4') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '4' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '5') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Di Jual' AND jenis_property = '5' AND status_agen='1' ORDER BY harga DESC";
            			}
            		} else if ($status == '2') {
            			if ($tipe == '1') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '1' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '2') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '2' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '3') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '3' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '4') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '4' AND status_agen='1' ORDER BY harga DESC";
            			} else if ($tipe == '5') {
            				$perintah = "SELECT * FROM tb_produk WHERE status = 'Disewakan' AND jenis_property = '5' AND status_agen='1' ORDER BY harga DESC";
            			}
            		}
            	}
            	$query = mysqli_query($conn, $perintah);
            	$dataw = mysqli_query($conn, $perintah);
                    while ($data = mysqli_fetch_array($dataw)) {
                    	$angka=$data['harga'];
						$hasil_rupiah = "Rp " . number_format($angka,2,',','.');

					  	if ($data['jenis_property']=='1') {
					  		$datapro='Rumah';
					  	}else if ($data['jenis_property']=='2') {
					  		$datapro='Villa';
					  	}else if ($data['jenis_property']=='3') {
					  		$datapro='Tanah';
					  	}else if ($data['jenis_property']=='4') {
					  		$datapro='Apartment';
					  	}else{
					  		$datapro='Hotel';
					  	}
            ?>
            	<div class="col-lg-6 pt-2">
					<div class="card">
					  	<div class="row g-0 rounded-3">
					    	<div class="col-md-4">
					     	 	<img src="assets/img/upload/<?php echo $data['foto']; ?>" style="width: 100%">
					    	</div>
					    	<div class="col-md-8">
					    		<a href="?page=index&aksi=property-detail&id=<?php echo $data['id']; ?>" class="nav-link item-list">
						      		<div class="card-body p-0 ps-2 pt-2">
						        		<h5 class="card-title"><b><?php echo $data['judul']; ?></b></h5>
						        		<small class="fa fa-map"></small> <?php echo $data['lokasi']; ?>
						        		<p class="card-text"><?php echo $data['ket_produk']; ?></p>
						        		<p class="card-text"><span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro; ?></span><span class="bg-red-card pt-1 pb-1 ps-3 pe-3"><?php echo $data['status']; ?></span></p>
						        		<p class="card-text"><?php echo $hasil_rupiah; ?></p>
						      		</div>
					      		</a>
					    	</div>
					  	</div>
					</div>
				</div>
            <?php
        		}
    		}else {
					include 'koneksi/db.php';
                    $perintah = "SELECT * FROM tb_produk WHERE status_agen='1' LIMIT 6";
                    $dataw = mysqli_query($conn, $perintah);
                    while ($data = mysqli_fetch_array($dataw)) {
                    	$angka=$data['harga'];
						$hasil_rupiah = "Rp " . number_format($angka,2,',','.');

				  	if ($data['jenis_property']=='1') {
				  		$datapro='Rumah';
				  	}else if ($data['jenis_property']=='2') {
				  		$datapro='Villa';
				  	}else if ($data['jenis_property']=='3') {
				  		$datapro='Tanah';
				  	}else if ($data['jenis_property']=='4') {
				  		$datapro='Apartment';
				  	}else{
				  		$datapro='Hotel';
				  	}
                  ?>
				<div class="col-lg-6 pt-2">
					<div class="card">
					  	<div class="row g-0 rounded-3">
					    	<div class="col-md-4">
					     	 	<img src="assets/img/upload/<?php echo $data['foto']; ?>" style="width: 100%">
					    	</div>
					    	<div class="col-md-8">
					    		<a href="?page=index&aksi=property-detail&id=<?php echo $data['id']; ?>" class="nav-link item-list">
						      		<div class="card-body p-0 ps-2 pt-2">
						        		<h5 class="card-title"><b><?php echo $data['judul']; ?></b></h5>
						        		<small class="fa fa-map"></small> <?php echo $data['lokasi']; ?>
						        		<p class="card-text"><?php echo $data['ket_produk']; ?></p>
						        		<p class="card-text"><span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro; ?></span><span class="bg-red-card pt-1 pb-1 ps-3 pe-3"><?php echo $data['status']; ?></span></p>
						        		<p class="card-text"><?php echo $hasil_rupiah; ?></p>
						      		</div>
					      		</a>
					    	</div>
					  	</div>
					</div>
				</div>
			<?php } ?>
			<?php
		}
		?>
				<div class="text-center p-4">
					<a href="#" class="btn btn-blue">See All...</a>
				</div>
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
							<img src="assets/img/cont/img1.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Bogor</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img2.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jakarta Timur</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img3.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jakarta</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img4.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jawa Tengah</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img5.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Jogja</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img6.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Malang</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img7.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Kalimantan</h3>
						</div>
					</a>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img8.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Bali</h3>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
