<?php
session_start();
include '../koneksi/db.php';
	$id = $_GET["id"];
    if (isset($_POST['update'])) {
       $nama = $_POST['nama'];
       $alamat = $_POST['alamat'];
       $email = $_POST['email'];
       $no_tlp = $_POST['no_tlp'];
       $nik = $_POST['nik'];
       $umur = $_POST['umur'];
   

      if (empty($nama) || empty($email) || empty($no_tlp) || empty($nik) || empty($umur) || empty($alamat)){
        echo " <script>alert('Failed, Data Anda tidak lengkap')</script> ";
      }
      else {
            $sql = "UPDATE tb_user SET nama='$nama',alamat='$alamat',email='$email',no_tlp='$no_tlp',no_nik='$nik',umur='$umur' WHERE id='$id'";
            $register = mysqli_query($conn, $sql);
            if ($register) {
              echo " <script>alert('Success, Anda Sudah Mengedit Data !');window.location='index.php'; </script> ";
            }else{
              echo " <script>alert('Failed, Membuat Mengedit Data'); </script> ";
            } 
        }   
    }

  $perintah = "SELECT * FROM tb_user where id='$id'";
  $dataw = mysqli_query($conn, $perintah);
  $data = mysqli_fetch_array($dataw)
?>
<a href="?page=agen&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a>
<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Pemilik</h6>
      </div>
	<form class="p-3" action="" method="post">
		<div class="form-group">
		    <label>Name Pemilik</label>
		    <input type="text" class="form-control" placeholder="Masukan Nama anda" name="nama" value="<?php echo $data['nama']; ?>">
		</div>
		<div class="form-group">
		    <label>No Telp</label>
		    <input type="text" class="form-control" placeholder="masukan nomer hp" name="no_tlp" value="<?php echo $data['no_tlp']; ?>">
		</div>
		<div class="form-group">
		    <label>Alamat</label>
		    <input type="text" class="form-control" placeholder="Sesuai dengan alamat tinggal" name="alamat" value="<?php echo $data['alamat']; ?>">
		</div>
		<div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" placeholder="Masukan Email anda" name="email"  value="<?php echo $data['email']; ?>">
		</div>
		<div class="form-group">
		    <label>Nik</label>
		    <input type="text" class="form-control" placeholder="Masukan Nik yang sesuai dengan KTP" name="nik" value="<?php echo $data['no_nik']; ?>">
		</div>
		<div class="form-group">
		    <label>Umur</label>
		    <input type="text" class="form-control" placeholder="Masukan Umur" name="umur" value="<?php echo $data['umur']; ?>">
		</div>
		  <button type="submit" class="btn btn-primary" name="update">Submit</button>
	</form>