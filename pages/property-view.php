
<div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Table Property Rumah </h6> 
      </div>
      <div class="card-body">
          <?php 
          include '../koneksi/db.php';
          $id = $_SESSION["login"];
          $perintah2 = "SELECT * FROM tb_user WHERE id = '$id'";
          $query2 = mysqli_query($conn,$perintah2);
          $user2 = mysqli_fetch_array($query2);
            $level = $user2['level'];
            if ($level == 2){
              $html = '
                    <a href="?page=property&aksi=input" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Property Rumah</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Agen</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>';
                      $no=1;
                      $perintah = " 
                        SELECT * FROM tb_user 
                        JOIN tb_produk ON tb_user.id=tb_produk.id_agen 
                         where status_agen=0 or status_agen=1";
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
                        <td>
                          <a href="?page=property&aksi=detail&id='.$data['id'].'" class="btn btn-warning"><span class="fa fa-eye"></span></a>
                          <a href="?page=property&aksi=edit&id='.$data['id'].'" class="btn btn-info"><span class="fa fa-pen"></span></a>
                          <a href="?page=property&aksi=delete&id='.$data['id'].'" class="btn btn-danger" onClick="alert("Yakin hapus data ini ?");"><span class="fa fa-trash"></span></a>
                        </td>
                      </tr>';
                      }
                      $html .= '
                    </tbody>
                  </table>';
                echo $html;
              }else if ($level == 1){
              $html = '
                    <a href="?page=property&aksi=input" class="btn btn-success"><span class="fa fa-plus"></span> Tambah Property Rumah</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Agen</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>';
                      $no=1;
                      $perintah = " 
                        SELECT * FROM tb_user 
                        JOIN tb_produk ON tb_user.id=tb_produk.id_agen 
                         where status_agen=0";
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
                        <td>
                        <form action="?page=property&aksi=validasi&id='.$data['id'].'" method="POST">
                          <button class="btn btn-warning" type="submit" name="terima"><span class="fa fa-check"></span></button>
                          <button class="btn btn-danger" type="submit" name="tolak"><span class="fa fa-times"></span></button>
                        </form>
                        </td>
                      </tr>';
                      }
                      $html .= '
                    </tbody>
                  </table>';
                echo $html;
              } else {
              $html = '
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Agen</th>
                      <th>Judul</th>
                      <th>Status</th>
                      <th>Foto</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>';
                      $no=1;
                      $perintah = " 
                        SELECT * FROM tb_user 
                        JOIN tb_produk ON tb_user.id=tb_produk.id_agen";
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
                        <td>
                          <a href="?page=property&aksi=detail&id='.$data['id'].'" class="btn btn-warning"><span class="fa fa-eye"></span></a>
                          <a href="?page=property&aksi=edit&id='.$data['id'].'" class="btn btn-info"><span class="fa fa-pen"></span></a>
                          <a href="?page=property&aksi=delete&id='.$data['id'].'" class="btn btn-danger" onClick="return confirm(\'Apakah anda ingin menghapus permintaan ini?\')"><span class="fa fa-trash"></span></a>
                        </td>
                      </tr>';
                      }
                      $html .= '
                    </tbody>
                  </table>';
                echo $html;
              }
          ?>
      </div>
  </div>