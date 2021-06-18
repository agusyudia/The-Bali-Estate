<?php
include '../koneksi/db.php';
if(isset($_POST['submit'])) {
	$nama_pemilik 	= $_POST['nama_pemilik'];
	$judul 			= $_POST['judul'];
	$lokasi 		= $_POST['lokasi'];
	$jenis_property 	= $_POST['jenis_property'];
    $sertifikat 	= $_POST['sertifikat'];
	$imb 			= $_POST['imb'];
    $ket_produk 	= $_POST['ket_produk'];
    $luas 	= $_POST['luas'];
    $surat_tanah 	= $_POST['surat_tanah'];
    $jml_kamar 	= $_POST['jml_kamar'];
    $jml_wc 	= $_POST['jml_wc'];
    $status 	= $_POST['status'];
    $id_agen 		= $_SESSION['login'];
    $harga 			= $_POST['harga'];

	if (empty($nama_pemilik)||empty($judul)||empty($lokasi)||empty($jenis_property)||empty($sertifikat)||empty($imb)||empty($ket_produk)||empty($luas)||empty($surat_tanah)||empty($jml_kamar)||empty($jml_wc)||empty($status)||empty($id_agen)||empty($harga)) {
		echo'
          <div class="alert alert-danger alert-dismissible w-100" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <i class="fa fa-times-circle"></i> Data Anda tidak lengkap
          </div>';
	}else{
        $ekstensi_diperbolehkan  = array('png','jpg');
	    $image = $_FILES['image']['name'];
	    $x = explode('.', $image);
	    $randomname = round(microtime(true)) . '.' . end($x); 
	    $ekstensi = strtolower(end($x));
	    $ukuran = $_FILES['image']['size'];
	    $file_tmp = $_FILES['image']['tmp_name'];
        
        if(in_array($ekstensi, $ekstensi_diperbolehkan) == true){
          if($ukuran < 2044070){      
            move_uploaded_file($file_tmp, '../assets/img/upload/'.$randomname);
            $perintah ="INSERT INTO tb_produk(id_pemilik,judul,jenis_property,sertifikat,imb,lokasi,luas,surat_tanah,jml_kamar,jml_wc,ket_produk,foto,status,harga,id_agen) VALUES('$nama_pemilik','$judul','$jenis_property','$sertifikat','$imb','$lokasi','$luas','$surat_tanah','$jml_kamar','$jml_wc','$ket_produk','$randomname','$status','$harga','$id_agen')";
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
	}
?>

<a href="?page=property&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a> 
<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Input Property Rumah</h6>
      </div>
	<form class="p-3" action="" method="post" enctype="multipart/form-data">
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Nama Pemilik</label>
		    <?php
				include '../koneksi/db.php';
				$id = $_SESSION['login'];
                $perintah = "SELECT * FROM tb_user WHERE id='$id'";
                $dataw = mysqli_query($conn, $perintah);
                $data = mysqli_fetch_array($dataw);
            ?>
      	<input type="text" class="form-control" id="ticket-email" placeholder="agen" name="nama_pemilik" value="<?php echo $data['nama'] ?>" readonly>
		</div>
		<div class="form-group">
		    <label>Judul</label>
		    <input type="text" class="form-control" placeholder="Judul Yang Akan dilihat orang" name="judul">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jenis Property</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="jenis_property">
		      <option>Pilih Salah 1</option>
		      <option value="1">Rumah</option>
		      <option value="2">Villa</option>
		      <option value="3">Tanah</option>
		      <option value="4">Apartment</option>
		      <option value="5">Gudang</option>
		      <option value="6">Hotel</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Sertifikat</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="sertifikat">
		      <option>Pilih Salah 1</option>
		      <option value="ada">Ada</option>
		      <option value="tidakada">Tidak Ada</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">IMB</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="imb">
		      <option>Pilih Salah 1</option>
		      <option value="ada">Ada</option>
		      <option value="tidakada">Tidak Ada</option>
		    </select>
		</div>
		<div class="form-group">
		    <label>Lokasi</label>
		    <input type="text" class="form-control" placeholder="lokasi" name="lokasi">
		</div>
		<div class="form-group">
		    <label>Keterangan</label>
		    <input type="text" class="form-control" placeholder="Keterangan Produk" name="ket_produk">
		</div>
		<div class="form-group">
		    <label>Luas</label>
		    <input type="text" class="form-control" placeholder="Luas" name="luas">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Surat Tanah</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="surat_tanah">
		      <option>Pilih Salah 1</option>
		      <option value="Ada">Ada</option>
		      <option value="Tidak Ada">Tidak Ada</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jumlah Kamar</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="jml_kamar">
		      <option>Pilih Salah 1</option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		      <option value="6">6</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jumlah Kamar Mandi</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="jml_wc">
		      <option>Pilih Salah 1</option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		      <option value="6">6</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlFile1">Masukan Berupa file Image</label>
		    <input required type="file" class="form-control-file" name="image" multiple="true">
	  	</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Status</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="status">
		      <option>Pilih Salah 1</option>
		      <option value="Di Jual">Di jual</option>
		      <option value="Di Sewakan">Di Sewakan</option>
		    </select>
		</div>
		<div class="form-group">
		    <label>Harga</label>
		    <input type="number" class="form-control" placeholder="Harga" name="harga">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Agen</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="id_agen">
	            <option>Pilih Salah 1</option>
                        <?php
						include '../koneksi/db.php';
                        $perintah = "SELECT * FROM tb_user WHERE level='1'";
                        $dataw = mysqli_query($conn, $perintah);
                         while ($data = mysqli_fetch_array($dataw)) {
                        ?>
                            <option value="<?php echo $data['id']; ?>"><?php echo $data['nama'];?></option>

                        <?php } ?>
	          </select>
		</div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
</div>