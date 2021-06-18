<?php
include '../koneksi/db.php';
	$id = $_GET["id"];
	$waktu  = +7;
	$tanggalpenjualan = gmdate("Y-m-j", time() + 3600*($waktu+date("I")));

if (isset($_POST['terima'])) {
	$querydelete = mysqli_query($conn, "UPDATE tb_produk SET status_agen='1', tanggal='$tanggalpenjualan' WHERE id = '$id'");
    if ($querydelete > 0) {
        echo $tanggalpenjualan;
    }
}else if (isset($_POST['tolak'])) {
	$querydelete = mysqli_query($conn, "UPDATE tb_produk SET status_agen='3', tanggal='$tanggalpenjualan' WHERE id = '$id'");
	if ($querydelete > 0) {
        echo"<script>alert('Success, Anda Menolak Property ini !');window.location='?page=property&aksi=view'; </script>";
    }
}else{
	echo'';
}
?>