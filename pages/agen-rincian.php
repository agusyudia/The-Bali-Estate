
<a href="?page=agen&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a>
<div class="col-lg-12 card shadow mb-4">
  	
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Table Rincian Property Agen</h6> 
      </div>
      <div class="card-body">
          <div class="table-responsive">
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
          		<tbody>
          			<?php
          				$no=1;
                  include("../koneksi/db.php");
							    $id = $_GET['id'];
                  $perintah = " SELECT * FROM tb_produk 
                  JOIN tb_user ON tb_produk.id_pemilik=tb_user.id
                  WHERE tb_produk.id_agen='$id'";
                  $dataw = mysqli_query($conn, $perintah);
                  while ($data = mysqli_fetch_array($dataw)) {
                  	if ($data['status_agen']=='0') {
                    $datatampil='Pengajuan';
                  }else if ($data['status_agen']=='1') {
                    $datatampil='Diterima';
                  }else {
                    $datatampil='Sudah terjual';
                  }
                ?>
              		<tr class="odd gradeX">
	                    <td><?php echo $no++ ?></td>
	                    <td><?php echo $data['nama']; ?></td>
                      <td><?php echo $data['judul']; ?></td>
	                    <td><?php echo $datatampil; ?></td>
	                    <td><img src="<?php echo "../assets/img/upload/".$data['foto']; ?>" style="width: 10%;"></td>
                      <td><img src="<?php echo "../assets/img/upload/bukti/".$data['buktipembayaran']; ?>" style="width: 10%;"></td>
              		</tr>
              	<?php } ?>
                </tbody>
            </table>
    	</div>
	</div>