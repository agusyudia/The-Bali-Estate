<?php
	session_start();
	include 'koneksi/db.php';
	$id = $_GET["id"];
  	$perintah = "
  	SELECT * FROM tb_user WHERE id = '$id'";

  	$dataw = mysqli_query($conn, $perintah);
  	$data = mysqli_fetch_array($dataw);
 ?>
<div class="container-fluid content bg-abu">
		<div class="container">
			<div class="row p-4">
				<div class="card">
					<h1 class="pt-4 ms-4"><b>Detail Agen</b></h1>
					<div class="container-fliud">
						<div class="wrapper row p-2">
							<div class="preview col-md-6">
								<div class="preview-pic tab-content">
								  <div class="tab-pane active" id="pic-1"><img src="assets/img/agen/agen-1.png" /></div>
								</div>
							</div>
							
							<div class="details col-md-6">
								<h3 class="product-title"><?php echo $data['nama'];?></h3>
								<p class="product-description">Konsultan properti yang berpengalaman di bidang ini.Saya siap membantu Bapak dan Ibu tidak hanya untuk mempunyai tempat tinggal idaman untuk keluarga tersayang maupun untuk usaha, tetapi juga menjualkan property anda.Bila butuh informasi tentang properti, baik apartemen, rumah, gedung, ruko, pabrik, gudang, tanah, lahan industri/komersial dll, silahkan menghubungi saya di nomor tlp/ whatsapp :
								<p><?php echo $data['no_tlp'];?></p>
								<br>
								Saya siap membantu anda.<br>
								Terima kasih</p>
								<h4>Agen Wilayah</h4>
								<h5><span class="fa fa-map blue"></span> <?php echo $data['alamat'];?></h5>
							</div>
						</div>
					</div>


					<div class="row p-4 d-flex bd-highlight mb-3">
						<h1>Detail Penjualan</h1>
						<div class="btn-group col-4 bd-highlight" role="group" aria-label="Basic example">
							<form action="" method="post">
							  	<button type="submit" class="btn btn-success" name="dijual">Dijual</button>
							  	<button type="submit" class="btn btn-success" name="terjual">Terjual</button>
							</form>
						</div>
						<div class="col-8 ms-auto bd-highlight">
							<div class="form-group col-4">
								<select class="form-control bg-abu" id="exampleFormControlSelect1">
									<option>Urutkan</option>
										<option>Terbaru</option>
										<option>Promo</option>
										<option>Harga Tertinggi</option>
										<option>Harga Terendah</option>
								</select>
							</div>
						</div>
					</div>
					<div class="row p-3">
						<div class="table-responsive">
							<?php
							include 'koneksi/db.php';
							if (isset($_POST['terjual'])) {
								$perintah = "SELECT * FROM tb_user 
								  	JOIN tb_produk ON tb_user.id = tb_produk.id_agen
								  	where tb_user.id= '$id' AND status_agen='2'";
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
												<div class="col-lg-8 pt-2">
													<div class="card">
													  	<div class="row g-0 rounded-3">
													    	<div class="col-md-4">
													     	 	<img src="assets/img/cont/exrumah.png" style="width: 100%">
													    	</div>
													    	<div class="col-md-8">
													    		<a href="" class="nav-link item-list">
														      		<div class="card-body p-0 ps-2 pt-2 p-1">
														        		<h5 class="card-title"><b><?php echo $data['judul']?></b></h5>
														        		<p class="card-text"><?php echo $data['ket_produk']?></p>
														        		<p class="card-text">
														        			<span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro ?></span>
														        		</p>
														        		<p class="card-text"><?php echo $hasil_rupiah?></p>
														      		</div>
													      		</a>
													    	</div>
													  	</div>
													</div>
												</div>
											<?php
								}
							}
						}else {
							
								$perintah = "SELECT * FROM tb_user 
								  	JOIN tb_produk ON tb_user.id = tb_produk.id_agen
								  	where tb_user.id= '$id' AND status_agen='1'";
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
												<div class="col-lg-8 pt-2">
													<div class="card">
													  	<div class="row g-0 rounded-3">
													    	<div class="col-md-4">
													     	 	<img src="assets/img/cont/exrumah.png" style="width: 100%">
													    	</div>
													    	<div class="col-md-8">
													    		<a href="" class="nav-link item-list">
														      		<div class="card-body p-0 ps-2 pt-2 p-1">
														        		<h5 class="card-title"><b><?php echo $data['judul']?></b></h5>
														        		<p class="card-text"><?php echo $data['ket_produk']?></p>
														        		<p class="card-text">
														        			<span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro ?></span>
														        		</p>
														        		<p class="card-text"><?php echo $hasil_rupiah?></p>
														      		</div>
													      		</a>
													    	</div>
													  	</div>
													</div>
												</div>
											<?php
								}
							}
						}
							?>

							<div class="row p-4">
								<nav aria-label="Page navigation">
								  	<ul class="pagination">
								    	<li class="page-item disabled">
								      		<a class="page-link" href="#" tabindex="-1">Previous</a>
								    	</li>
								    	<li class="page-item active">
								    		<a class="page-link" href="#">1</a>
								    	</li>
								    	<li class="page-item">
								      		<a class="page-link" href="#">2</a>
								    	</li>
								    	<li class="page-item">
								    		<a class="page-link" href="#">3</a>
								    	</li>
								    	<li class="page-item">
								      		<a class="page-link" href="#">Next</a>
								    	</li>
								  	</ul>
								</nav>
							</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
	<div class="container-fluid pt-4 pb-4">
		<div class="container">
			<div class="row p-2">
				<div class="p-2">
					<p style="color: #00B978;">Agen Nusantara</p>
					<h1><b>Cari Agen di Nusantara</b></h1>
				</div>
				<div class="col-lg-3 p-3 rounded-3">
					<a href="" class="nav-link item">
						<div class="card img-j">
							<img src="assets/img/cont/img8.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Bali</h3>
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
							<img src="assets/img/cont/img1.png" style="max-width:100%; margin: auto;">
							<h3 class="bg-dark">Bogor</h3>
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
			</div>
		</div>
	</div>	
	