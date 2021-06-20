<a href="?page=property&aksi=view" class="btn btn-info rounded-circle m-2"><span class="fa fa-arrow-left"></span></a> 
<div class="card shadow mb-4 col-lg-4">
      <div class="card-header">
          <h6 class="m-0 font-weight-bold text-primary">Input Property Rumah</h6>
      </div>
	<form class="p-3" action="../laporan.php" method="post" enctype="multipart/form-data" target="_blank">
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Tahun Laporan Penjualan</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="tahun">
		      <option>Pilih Salah 1</option>
		      <option value="2019">2019</option>
		      <option value="2020">2020</option>
		      <option value="2021">2021</option>
		    </select>
		</div>
		<input type="text" name="id" value="<?php echo $_SESSION['login']; ?>" hidden>
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
</div>