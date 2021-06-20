
<?php
	$id = $_SESSION["login"];
  	$perintah2 = "SELECT * FROM tb_user WHERE id = '$id'";
  	$query2 = mysqli_query($conn,$perintah2);
  	$user2 = mysqli_fetch_array($query2);
    $level = $user2['level'];
	if ($level == 1) {
		$html = '
				<div class="card shadow mb-4">
				  <div class="card-header py-3">
				      <h6 class="m-0 font-weight-bold text-primary">Table Property Rumah yang anda pegang</h6> 
				  </div>
				<div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pemilik</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Bukti</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>';
                      $no=1;
                      $perintah = " 
                        SELECT * FROM tb_user 
                        JOIN tb_produk ON tb_user.id=tb_produk.id_pemilik 
                        where tb_produk.id_agen='$id'";
                      $dataw = mysqli_query($conn, $perintah);
                      while ($data = mysqli_fetch_array($dataw)) {
                        if ($data['status_agen']=='0') {
                          $datatampil='Pengajuan';
                        }else if ($data['status_agen']=='1') {
                          $datatampil='Diterima';
                        }else if ($data['status_agen']=='2'){
                          $datatampil='Sudah terjual';
                        }else if ($data['status_agen']=='3'){
                          $datatampil='Ditolak';
                        }else {
                          $datatampil='Di Hapus';
                        }
                      $html .= '
                      <tr class="odd gradeX">
                        <td>'.$no++.'</td>
                        <td>'.$data['nama'].'</td>
                        <td>'.$data['judul'].'</td>
                        <td>'.$datatampil.'</td>
                        <td><img src="../assets/img/upload/'.$data['foto'].'" style="width: 10%;"></td>
                        <td><img src="../assets/img/upload/bukti/'.$data['buktipembayaran'].'" style="width: 10%;"></td>
                        <td>
                         <a href="?page=property&aksi=bukti&id='.$data['id'].'" class="btn btn-success"><span class="fa fa-clipboard-list"></span></a>
                        </td>
                      </tr>';
                      }
                      $html .= '
                    </tbody>
                  </table>';
                echo $html;
	}else if($level == 2) {
		$html = '			
    <div class="card shadow mb-4">
			  <div class="card-header py-3">
			      <h6 class="m-0 font-weight-bold text-primary">Table Property Rumah Anda</h6> 
			  </div>
			<div class="card-body">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pemilik</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Bukti</th>
                    </tr>
                  </thead>
                  <tbody>';
                      $no=1;
                      $perintah = " 
                        SELECT * FROM tb_user 
                        JOIN tb_produk ON tb_user.id=tb_produk.id_pemilik 
                        WHERE id = '$id'";
                      $dataw = mysqli_query($conn, $perintah);
                      while ($data = mysqli_fetch_array($dataw)) {
                        if ($data['status_agen']=='0') {
                          $datatampil='Pengajuan';
                        }else if ($data['status_agen']=='1') {
                          $datatampil='Diterima';
                        }else if ($data['status_agen']=='2'){
                          $datatampil='Sudah terjual';
                        }else if ($data['status_agen']=='3'){
                          $datatampil='Ditolak';
                        }else {
                          $datatampil='Di Hapus';
                        }
                      $html .= '
                      <tr class="odd gradeX">
                        <td>'.$no++.'</td>
                        <td>'.$data['nama'].'</td>
                        <td>'.$data['judul'].'</td>
                        <td>'.$datatampil.'</td>
                        <td><img src="../assets/img/upload/'.$data['foto'].'" style="width: 10%;"></td>
                        <td><img src="../assets/img/upload/bukti/'.$data['buktipembayaran'].'" style="width: 10%;"></td>
                      </tr>';
                      }
                      $html .= '
                    </tbody>
                  </table>';
                echo $html;
	}else {
		echo'';
	}
?>


