<?php
	session_start();
	include '../koneksi/db.php';
	$id = $_GET["id"];
  	$perintah = "
  	SELECT *,COUNT(id_agen) AS jumlah  
  	FROM tb_user 
  	INNER JOIN tb_produk ON tb_user.id = tb_produk.id_agen
  	ORDER BY id_agen";
  	$dataw = mysqli_query($conn, $perintah);
  	$data = mysqli_fetch_array($dataw)
?>
<a href="?page=pemilik&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a> 
<div class="card shadow mb-4">
	<div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Detail Agen</h6> 
    </div>
    <div class="card-body">
		<form class="row g-3">>
		  <div class="col-md-6">
		    <label for="inputEmail4" class="form-label">Nama</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['nama']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">Username</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['username']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">Alamat</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['alamat']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">No Telp</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['no_tlp']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">Umur</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['umur']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">No NIK</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['no_nik']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">Email</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['email']; ?>">
		  </div>
		  <div class="col-md-6 g-3">
		    <label for="inputEmail4" class="form-label">Jumlah Property</label>
		    <input class="form-control" id="inputEmail4" value="<?php echo $data['jumlah']; ?>">
		  </div>
		</form>
	</div>
</div>