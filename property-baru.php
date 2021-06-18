
	<div class="container-fluid content bg-abu">
		<div class="container">
			<div class="row p-4">
				<h3 class="p-2 ms-4"><b> Cari Property</b></h3>
				<form action="" method="post">
					<div class="form-row d-flex">
						<div class="input-group flex-fill p-2 ms-4">
							<input type="text" class="form-control p-3" placeholder="Ketik atau pilih lokasi" aria-label="Recipient's username" aria-describedby="basic-addon2"  name="search" value="<?php if(isset($_POST['search'])){ echo $_POST['search'];} ?>">
							<div class="input-group-append">
								<button class="btn btn-orange p-3" type="submit" name="submit">Cari!</button>
							</div>
						</div>	
					</div>
				</form>
			</div>
		</div>	
	</div>
	<div class="container-fluid pt-4 pb-4">
		<div class="container">
			<div class="row p-3">
				<div class="p-2">
					<p style="color: #00B978;">Property</p>
					<h1><b>New Property</b></h1>
				</div>
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
								  	<div class="row rounded-3">
								    	<div class="col-md-6">
								     	 	<img src="assets/img/upload/<?php echo $data['foto']; ?>" style="width: 100%">
								    	</div>
								    	<div class="col-md-6">
									    	<div class=" card-body">
									    		<a href="?page=index&aksi=property-detail&id=<?php echo $data['id']; ?>" class="nav-link item">
										      		<div class="card-body p-0 ps-1 pt-2 pb-1 h-card">
										        		<h5 class="card-title"><b><?php echo $data['judul']; ?></b></h5>
										        		<p class="card-text">
										        			<?php echo $data['ket_produk']; ?>
										        			<label><span class="fa fa-map blue"></span> <?php echo $data['lokasi']; ?></label>
										        		</p>
										        		<p class="card-text">
										        			<span class="fa fa-bed text-info p-1"></span><?php echo $data['jml_kamar']; ?>
										        			<span class="fa fa-bath text-info p-1"></span><?php echo $data['jml_wc']; ?>
										        			<span class="fa fa-arrows-alt text-info p-1"></span><?php echo $data['luas']; ?>
										        		</p>
										        		<p class="card-text">
										        			<span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro; ?></span>
										        			<span class="bg-red-card pt-1 pb-1 ps-3 pe-3">New</span>
										        			<span class="bg-blue-card pt-1 pb-1 ps-3 pe-3">Dic 15%</span>
										        			<p><?php echo $hasil_rupiah; ?></p>
										        		</p>
										      		</div>
									      		</a>
									    	</div>
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
			        </div>';
                }
            }else {
					include 'koneksi/db.php';
                    $perintah = "SELECT * FROM tb_produk WHERE status_agen='1' 
                    ORDER BY `tb_produk`.`id` DESC";
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
					  	<div class="row rounded-3">
					    	<div class="col-md-6">
					     	 	<img src="assets/img/upload/<?php echo $data['foto']; ?>" style="width: 100%">
					    	</div>
					    	<div class="col-md-6">
						    	<div class=" card-body">
						    		<a href="?page=index&aksi=property-detail&id=<?php echo $data['id']; ?>" class="nav-link item">
							      		<div class="card-body p-0 ps-1 pt-2 pb-1 h-card">
							        		<h5 class="card-title"><b><?php echo $data['judul']; ?></b></h5>
							        		<p class="card-text">
							        			<?php echo $data['ket_produk']; ?>
							        			<label><span class="fa fa-map blue"></span> <?php echo $data['lokasi']; ?></label>
							        		</p>
							        		<p class="card-text">
							        			<span class="fa fa-bed text-info p-1"></span><?php echo $data['jml_kamar']; ?>
							        			<span class="fa fa-bath text-info p-1"></span><?php echo $data['jml_wc']; ?>
							        			<span class="fa fa-arrows-alt text-info p-1"></span><?php echo $data['luas']; ?>
							        		</p>
							        		<p class="card-text">
							        			<span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro; ?></span>
							        			<span class="bg-red-card pt-1 pb-1 ps-3 pe-3">New</span>
							        			<span class="bg-blue-card pt-1 pb-1 ps-3 pe-3">Dic 15%</span>
							        			<p><?php echo $hasil_rupiah; ?></p>
							        		</p>
							      		</div>
						      		</a>
						    	</div>
					    	</div>
					  	</div>
					</div>
				</div>
			<?php } ?>
			<?php
			}
			?>
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
