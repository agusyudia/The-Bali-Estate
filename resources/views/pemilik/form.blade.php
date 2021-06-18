@extends('layout')
@section('content')

  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Input Pemilik</h6>
      </div>
	<form class="p-3" action="{{ route('formpemilik')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
		    <label>Name Pemilik</label>
		    <input type="text" class="form-control @error('nama_pemilik') is-invalid @enderror" placeholder="Name" name="nama_pemilik" value="{{ old('nama_pemilik') }}">
		</div>
		<div class="form-group">
		    <label>Alamat</label>
		    <input type="text" class="form-control @error('alamat') is-invalid @enderror" placeholder="Alamat Tempat tinggal" name="alamat" value="{{ old('alamat') }}">
		</div>
		<div class="form-group">
		    <label>No Telp</label>
		    <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" placeholder="masukan nomer hp yang di whatapp" name="no_tlp" value="{{ old('no_tlp') }}">
		</div>
		<div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email anda" name="email" value="{{ old('email') }}">
		</div>
		<div class="form-group">
		    <label>NIK</label>
		    <input type="number" class="form-control @error('nik') is-invalid @enderror" placeholder="NIK sesuai dengan ktp" name="nik" value="{{ old('nik') }}">
		</div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
@endsection