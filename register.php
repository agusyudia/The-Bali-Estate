<?php
session_start();
include 'koneksi/db.php';
    if (isset($_POST['register'])) {
       $nama = $_POST['nama'];
       $username = $_POST['username'];
       $alamat = $_POST['alamat'];
       $email = $_POST['email'];
       $no_tlp = $_POST['no_tlp'];
       $level = $_POST['level'];
       $password = md5($_POST['password']);
   

      if (empty($nama) || empty($username) || empty($email) || empty($no_tlp) || empty($level) || empty($password)){
        echo " <script>alert('Failed, Data Anda tidak lengkap')</script> ";
      }
      else {
            $sql = "
              INSERT INTO tb_user 
              (nama, no_tlp, email, alamat, username, password, level) 
              VALUES 
              ('$nama', '$no_tlp', '$email', '$alamat', '$username', '$password', '$level')";
            $register = mysqli_query($conn, $sql);
            if ($register) {
              $loginsql = "
                SELECT * FROM tb_user
                WHERE username = '$username' AND password = '$password'";
              $login = mysqli_query($conn, $loginsql);
              $datalogin = mysqli_fetch_array($login);

              $_SESSION["username"]= $datalogin['username'];
              $_SESSION["login"] = $datalogin['id'];
              echo " <script>alert('Success, Anda Sudah Membuat Akun !');window.location='login.php'; </script> ";
            }else{
              echo " <script>alert('Failed, Membuat Akun'); </script> ";
            } 
        }   
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
   <link rel="icon" href="assets/img/logo.png" type="image/x-icon">

    <title>The Bali Estate - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <a href="index.php" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a>
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" action="" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Nama Anda" name="nama">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Username anda" name="username">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Alamat Anda" name="alamat">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Email anda" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Nomer telephone" name="no_tlp">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="exampleFormControlSelect1">Sebagai</label>
                                        <select class="form-control form-control-solid" id="exampleFormControlSelect1" name="level">
                                            <option selected>Pilih Salah 1</option>
                                            <option value="1">Agen</option>
                                            <option value="2">Pemilik</option>
                                        </select>
                                    </div>
                                </div>
                                <button class="btn btn-success btn-user btn-block" type="submit" name="register">
                                    Createa Account
                                </button>
                                <hr>
                                <a href="" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>