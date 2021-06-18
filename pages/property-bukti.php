<?php
include '../koneksi/db.php';
$id=$_GET['id'];
if(isset($_POST['bukti'])) {
      $ekstensi_diperbolehkan  = array('png','jpg');
	    $image = $_FILES['image']['name'];
	    $x = explode('.', $image);
	    $randomname = round(microtime(true)) . '.' . end($x); 
	    $ekstensi = strtolower(end($x));
	    $ukuran = $_FILES['image']['size'];
	    $file_tmp = $_FILES['image']['tmp_name'];


  $waktu  = +7;
  $tanggalpenjualan = gmdate("Y-m-j", time() + 3600*($waktu+date("I")));
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
          if($ukuran < 2044070){      
            move_uploaded_file($file_tmp, '../assets/img/upload/bukti/'.$randomname);
            $perintah ="UPDATE tb_produk SET buktipembayaran='$randomname',status_agen='2',tanggal='$tanggalpenjualan' where id='$id'";
            $query = mysqli_query($conn,$perintah);
            if($query){
              echo'<div class="alert alert-success" role="alert"> Selamat Data berhasil di input</div>';
            }else{
              echo '<div class="alert alert-danger" role="alert"> Maaf Data gagal di input</div>';
            }
          }else{
            echo'<div class="alert alert-danger" role="alert"> Maaf File image terlalu besar</div>';
          }
        }else{
          echo '<div class="alert alert-danger" role="alert"> Maaf file harus berupa PNG & JPG</div>';
        }

}
?><a href="?page=property&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a>
<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Anda Yakin Bahwa Property ini sudah laku ?</h6>
      </div>
	<form class="p-3" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
		    <label>Bukti Pembayaran</label>
		    <input type="file" class="form-control-file" name="image" multiple="true">
		</div>
		  <button type="submit" class="btn btn-primary" name="bukti">Submit</button>
	</form>