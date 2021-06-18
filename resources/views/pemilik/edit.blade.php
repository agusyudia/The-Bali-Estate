@extends('layout')
@section('content')

  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Pemilik</h6>
      </div>
	<form class="p-3" action="{{ route('updatepemilik',$pemilik->id)}}" method="post">
		@csrf
		@method('PUT') 
		<div class="form-group">
		    <label>Name Pemilik</label>
		    <input type="text" class="form-control" placeholder="Masukan Nama anda" name="nama_pemilik" value="{{$pemilik -> nama_pemilik}}">
		</div>
		<div class="form-group">
		    <label>No Telp</label>
		    <input type="text" class="form-control" placeholder="masukan nomer hp" name="no_tlp" value="{{$pemilik -> no_tlp}}">
		</div>
		<div class="form-group">
		    <label>Lokasi</label>
		    <input type="text" class="form-control" placeholder="Sesuai dengan alamat tinggal" name="alamat" value="{{$pemilik -> alamat}}">
		</div>
		<div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control" placeholder="Masukan Email anda" name="email"  value="{{$pemilik -> email}}">
		</div>
		<div class="form-group">
		    <label>Nik</label>
		    <input type="text" class="form-control" placeholder="Masukan Nik yang sesuai dengan KTP" name="nik" value="{{$pemilik -> nik}}">
		</div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
@endsection 