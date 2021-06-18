<?php
	session_start();
	include '../koneksi/db.php';
	$id = $_GET["id"];
  	$perintah = "
  	SELECT * FROM tb_produk 
  	JOIN tb_user ON tb_produk.id_agen = tb_user.id
  	where tb_produk.id = '$id'";
  	$dataw = mysqli_query($conn, $perintah);
  	$data = mysqli_fetch_array($dataw);

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
<a href="?page=property&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a> 
<div class="card shadow mb-4">
	<div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Property</h6> 
    </div>
    <div class="card-body">
		<form class="row g-3">
		  <div class="col-md-6">
		    <label for="inputEmail4" class="form-label">Nama Agen</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['nama']; ?>">

		    <label for="inputEmail4" class="form-label">Judul Property</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['judul']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Jenis Property</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $datapro; ?>">
		  

		    <label for="inputEmail4" class="form-label">Sertifikat</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['sertifikat']; ?>">
		  
		    <label for="inputEmail4" class="form-label">IMB</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['imb']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Surat Tanah</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['surat_tanah']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Lokasi</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['lokasi']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Luas</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['luas']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Jumlah Kamar</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['jml_kamar']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Jumlah Kamar Mandi</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['jml_wc']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Status Property </label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['status']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Keterangan Produk</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['ket_produk']; ?>">
		  
		    <label for="inputEmail4" class="form-label">Harga</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['harga']; ?>">
		  </div>


		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">Foto</label>
		    <img src="../assets/img/upload/<?php echo $data['foto']?>" class="w-100">
		  </div>
		</form>
	</div>
</div>