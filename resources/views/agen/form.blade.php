@extends('layout')
@section('content')

  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Input agen</h6>
      </div>
	<form class="p-3" action="{{ route('formagen')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
		    <label>Name Agen</label>
		    <input type="text" class="form-control @error('nama_agen') is-invalid @enderror" placeholder="Name" name="nama_agen" value="{{ old('nama_agen') }}">
		</div>
		<div class="form-group">
		    <label>No Telp</label>
		    <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" placeholder="masukan nomer hp yang di whatapp" name="no_tlp" value="{{ old('no_tlp') }}">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
		    <select class="form-control @error('gender') is-invalid @enderror" id="exampleFormControlSelect1" name="gender" value="{{ old('gender') }}">
		      <option>Pilih Salah 1</option>
		      <option value="Laki-laki">Laki-laki</option>
		      <option value="Perempuan">Perempuan</option>
		      <option value="Belum Ditentukan">Belum Ditentukan</option>
		    </select>
		</div>
		<div class="form-group">
		    <label>Provinsi</label>
		    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" placeholder="lokasi Bali, Jakarta timur, Jawa timur" name="lokasi" value="{{ old('lokasi') }}">
		</div>
		<div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email anda" name="email" value="{{ old('email') }}">
		</div>
		<div class="form-group">
		    <label>Dari Perusahaan</label>
		    <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" placeholder="Dari Perusahaan mana" name="perusahaan" value="{{ old('perusahaan') }}">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlFile1">Masukan Berupa file Image</label>
		    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
	  	</div>
		<div class="form-group">
		    <label>Deskripsi Diri Anda</label>
		    <input type="text" class="form-control @error('keterangan') is-invalid @enderror" placeholder="Deskripsikan Anda" name="keterangan" value="{{ old('keterangan') }}">
		</div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
@endsection