<?php
include '../koneksi/db.php';
	$id = $_GET["id"];

if (isset($_POST['terima'])) {
	$querydelete = mysqli_query($conn, "UPDATE tb_produk SET status_agen='1' WHERE id = '$id'");
    if ($querydelete > 0) {
        echo"<script>alert('Success, Anda Menerima Property ini !');window.location='?page=property&aksi=view'; </script>";
    }
}else if (isset($_POST['tolak'])) {
	$querydelete = mysqli_query($conn, "UPDATE tb_produk SET status_agen='3' WHERE id = '$id'");
	if ($querydelete > 0) {
        echo"<script>alert('Success, Anda Menolak Property ini !');window.location='?page=property&aksi=view'; </script>";
    }
}else{
	echo'';
}
?>