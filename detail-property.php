<?php
	session_start();
	include 'koneksi/db.php';
	$id = $_GET["id"];
  	$perintah = "
  	SELECT * FROM tb_produk 
  	JOIN tb_user ON tb_produk.id_agen = tb_user.id
  	where tb_produk.id = '$id'";
  	$dataw = mysqli_query($conn, $perintah);
  	$data = mysqli_fetch_array($dataw);
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
<div class="container-fluid content bg-abu">
		<div class="container">
			<div class="row p-4">
				<div class="card">
					<h1 class="pt-4 ms-4"><b>Detail Property</b></h1>
					<div class="container-fliud">
						<div class="wrapper row p-2">
							<div class="preview col-md-6">
								
								<div class="preview-pic tab-content">
								  <div class="tab-pane active" id="pic-1"><img src="assets/img/upload/<?php echo $data['foto']; ?>" /></div>
								</div>
								
							</div>
							<div class="details col-md-6">
								<h3 class="product-title"><?php echo $data['judul']; ?></h3>
								<p class="product-description"><?php echo $data['ket_produk']; ?></p>
								<h4 class="price">Harga: <span><?php echo $hasil_rupiah; ?></span></h4>
								<p>
									<span class="bg-green-card pt-1 pb-1 ps-3 pe-3"><?php echo $datapro; ?></span>
									<span class="bg-red-card pt-1 pb-1 ps-3 pe-3">New</span>
									<span class="bg-blue-card pt-1 pb-1 ps-3 pe-3">Dic 15%</span>
								</p>
								<div class="action row mt-3">
									<h3 class="p-3">Agen :</h3>
									<div class="col-3">
										<img class="rounded-circle" src="assets/img/agen/agen-1.png" style="height: 120px;" />
									</div>
									<div class="col-9">
										<h3><?php echo $data['nama']; ?></h3>
										<p><span>+62<?php echo $data['no_tlp']; ?></span></p>
								    	<a href="https://wa.me/<?php echo $data['no_tlp']; ?>" target="_blank" class="btn btn-outline-primary"><span class="fa fa-phone"></span>  Hubungi</a>
								    	<a href="?page=index&aksi=agen-detail&id=<?php echo $data['id']; ?>" class="btn btn-outline-primary">Detail</a>
									</div>
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
	