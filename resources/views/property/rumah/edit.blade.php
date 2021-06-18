@extends('layout')
@section('content')

  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Property</h6>
      </div>
	<form class="p-3" action="{{ route('update',$rumah->id)}}" method="post">
		@csrf
		@method('PUT') 
		<div class="form-group">
		    <label>Name Penjual</label>
		    <input type="text" class="form-control @error('nama_penjual') is-invalid @enderror" placeholder="Name" name="nama_penjual" value="{{$rumah -> nama_penjual}}" disabled>
		</div>
		<div class="form-group">
		    <label>Judul</label>
		    <input type="text" class="form-control  @error('judul') is-invalid @enderror" placeholder="Judul Yang Akan dilihat orang" name="judul">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Sertifikat</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="sertifikat">
		      <option value="{{$rumah -> sertifikat}}">Pilih Salah 1</option>
		      <option value="ada">Ada</option>
		      <option value="tidakada">Tidak Ada</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">IMB</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="imb">
		      <option>Pilih Salah 1</option>
		      <option value="ada">Ada</option>
		      <option value="tidakada">Tidak Ada</option>
		    </select>
		</div>
		<div class="form-group">
		    <label>Lokasi</label>
		    <input type="text" class="form-control" placeholder="lokasi" name="lokasi">
		</div>
		<div class="form-group">
		    <label>Keterangan</label>
		    <input type="text" class="form-control" placeholder="Keterangan Produk" name="ket_produk">
		</div>
		<div class="form-group">
		    <label>Luas</label>
		    <input type="text" class="form-control" placeholder="Luas" name="luas">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Surat Tanah</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="surat_tanah">
		      <option>Pilih Salah 1</option>
		      <option value="ada">Ada</option>
		      <option value="tidakada">Tidak Ada</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jumlah Kamar</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="jml_kamar">
		      <option>Pilih Salah 1</option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		      <option value="6">6</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jumlah Kamar Mandi</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="jml_wc">
		      <option>Pilih Salah 1</option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		      <option value="3">3</option>
		      <option value="4">4</option>
		      <option value="5">5</option>
		      <option value="6">6</option>
		    </select>
		</div>
		<div class="form-group">
		    <label for="exampleFormControlFile1">Masukan Berupa file Image</label>
		    <input required type="file" class="form-control-file" name="image[]" multiple="true">
	  	</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Status</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="status">
		      <option>Pilih Salah 1</option>
		      <option value="Di Jual">Di jual</option>
		      <option value="Di Sewakan">Di Sewakan</option>
		    </select>
		</div>
		<div class="form-group">
		    <label>Harga</label>
		    <input type="number" class="form-control" placeholder="Harga" name="harga">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Agen</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="id_agen">
		      <option>Pilih Salah 1</option>
		      <option value="1">1</option>
		      <option value="2">2</option>
		    </select>
		</div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
@endsection 