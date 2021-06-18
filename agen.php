
<div class="container-fluid content bg-abu">
		<div class="container">
			<div class="row p-4">
				<h3 class="p-2 ms-4"><b>Temukan Agen Yang Tepat</b></h3>
				<form action="" method="post">
					<div class="form-row d-flex">
						<div class="input-group flex-fill p-2 ms-4">
							<input type="text" class="form-control p-3" placeholder="cari lokasi agen sesuai dengan property yang anda inginkan" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search" value="<?php if(isset($_POST['search'])){ echo $_POST['search'];} ?>">
							<div class="input-group-append">
								<button class="btn btn-orange p-3" type="submit" name="submit">Cari!</button>
							</div>
						</div>	
					</div>
				</form>
			</div>
		</div>	
	</div>
	<div class="container pt-4">
		<div class="row p-4">
			<div class="p-2">
				<h1><b>Agen Kami</b></h1>
			</div>
				<?php
				if (isset($_POST['search'])) {
						$filter = $_POST['search'];
						$perintah = "SELECT * FROM tb_user WHERE CONCAT(nama,alamat,no_tlp) LIKE '%$filter%' and level='1'";
                    	$query = mysqli_query($conn, $perintah);
                    	if (mysqli_num_rows($query) > 0) {
                    		foreach ($query as $data ) {
                    			?>
                    			<div class="col-lg-3 p-2">
									<div class="card text-center">
									  	<img class="card-img-top" src="assets/img/agen/agen-1.png" alt="Card image cap" style="max-height: 300px !important;">
									 	<div class="card-body">
									    	<h5 class="card-title blue"><?php echo $data['nama']; ?></h5>
									 	</div>
											<ul class="list-group list-group-flush">
											    <li class="list-group-item">PT The Bali Estate</li>
											    <li class="list-group-item"><span class="fa fa-map blue"></span> <?php echo $data['alamat']; ?></li>
											    <li class="list-group-item">+62<?php echo $data['no_tlp']; ?></li>
											    <li class="list-group-item">Memiliki  : 20</li>
											</ul>
									 	<div class="card-body">
									    	<a href="https://wa.me/62<?php echo $data['no_tlp']; ?>" target="_blank" class="btn btn-outline-primary"><span class="fa fa-phone"></span>  Hubungi</a>
									    	<a href="?page=index&aksi=agen-detail&id=<?php echo $data['id']; ?>" class="btn btn-outline-primary">Detail</a>
									  	</div>
									</div>
								</div>
                    			<?php
                    		}
                    	}else{
                    		echo'
                    		<div class="alert alert-danger alert-dismissible w-100" role="alert">
					            <i class="fa fa-times-circle"></i> Maaf Agen Yang Anda Cari Tidak Ada!
					        </div>
						        ';
                    	}
                    }else{
		                    $perintah = "SELECT * FROM tb_user where level='1' AND status='1' LIMIT 4";
		                    $dataw = mysqli_query($conn, $perintah);
		                    while ($data = mysqli_fetch_array($dataw)) {
		                  ?>
							<div class="col-lg-3 p-2">
								<div class="card text-center">
								  	<img class="card-img-top" src="assets/img/agen/agen-1.png" alt="Card image cap" style="max-height: 300px !important;">
								 	<div class="card-body">
								    	<h5 class="card-title blue"><?php echo $data['nama']; ?></h5>
								 	</div>
										<ul class="list-group list-group-flush">
										    <li class="list-group-item">PT The Bali Estate</li>
										    <li class="list-group-item"><span class="fa fa-map blue"></span> <?php echo $data['alamat']; ?></li>
										    <li class="list-group-item">+62<?php echo $data['no_tlp']; ?></li>
										    <li class="list-group-item">Memiliki  : 20</li>
										</ul>
								 	<div class="card-body">
								    	<a href="https://wa.me/62<?php echo $data['no_tlp']; ?>" target="_blank" class="btn btn-outline-primary"><span class="fa fa-phone"></span>  Hubungi</a>
								    	<a href="?page=index&aksi=agen-detail&id=<?php echo $data['id']; ?>" class="btn btn-outline-primary">Detail</a>
								  	</div>
								</div>
							</div>
						<?php } ?>
						<?php
					}
					?>
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
	