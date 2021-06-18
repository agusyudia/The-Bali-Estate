
<div class="row">
  <div class=" col-lg-12"> 
    <div class="card shadow">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Table Agen</h6> 
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                      <tr>
                        <th>No</th>
                        <th>Nama Agen</th>
                        <th>Email</th>
                        <th>No telepone</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                    $no=1;
                    $perintah = "SELECT * FROM tb_user where level='1' AND status='1'";
                    $dataw = mysqli_query($conn, $perintah);
                    while ($data = mysqli_fetch_array($dataw)) {
                  ?>
                      <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['no_tlp']; ?></td>
                        <td>
                          <a href="?page=agen&aksi=detail&id=<?php echo $data['id']?>" class="btn btn-warning"><span class="fa fa-eye"></span></a>
                          <a href="?page=agen&aksi=edit&id=<?php echo $data['id']?>" class="btn btn-info"><span class="fa fa-pen"></span></a>
                          <a href="?page=agen&aksi=rincian&id=<?php echo $data['id']?>" class="btn btn-success"><span class="fa fa-list"></span></a>
                          <a href="?page=agen&aksi=delete&id=<?php echo $data['id']?>" class="btn btn-danger" onClick="alert('Yakin hapus data ini ?');"><span class="fa fa-trash"></span></a>
                          
                        </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</div>
