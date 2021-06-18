<?php
$id = $_GET['id'];
    $querydelete = mysqli_query($conn, "UPDATE tb_produk SET status_agen='3' WHERE id = '$id'");

    if ($querydelete > 0) {
        echo"<script>alert('Success, Anda Sudah Hapus Data !');window.location='?page=property&aksi=view'; </script>";
    }
    else{
        echo "<script>alert('Error, Anda Sudah Hapus Data !');window.location='?page=property&aksi=view'; </script>" ;
    }
?>