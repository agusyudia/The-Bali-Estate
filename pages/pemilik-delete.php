<?php
$id = $_GET['id'];
    $querydelete = mysqli_query($conn, "UPDATE tb_user SET status='0' WHERE id = '$id'");

    if ($querydelete > 0) {
        echo"<script>alert('Success, Anda Sudah Hapus Data !');window.location='?page=pemilik&aksi=view'; </script>";
    }
    else{
        echo "<script>alert('Error, Anda Sudah Hapus Data !');window.location='?page=pemilik&aksi=view'; </script>" ;
    }
?>