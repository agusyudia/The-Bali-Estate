@extends('layout')
@section('content')

  <div class="card shadow mb-4">
      <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Edit Data Agen</h6>
      </div>
	<form class="p-3" action="{{ route('update',$agen->id)}}" method="post">
		@csrf
		@method('PUT') 
		<div class="form-group">
		    <label>Name Agen</label>
		    <input type="text" class="form-control @error('nama_agen') is-invalid @enderror" placeholder="Name" name="nama_agen" value="{{$agen -> nama_agen}}">
		</div>
		<div class="form-group">
		    <label>No Telp</label>
		    <input type="text" class="form-control @error('no_tlp') is-invalid @enderror" placeholder="masukan nomer hp yang di whatapp" name="no_tlp" value="{{$agen -> no_tlp}}">
		</div>
		<div class="form-group">
		    <label>Lokasi</label>
		    <input type="text" class="form-control @error('lokasi') is-invalid @enderror" placeholder="lokasi Bali, Jakarta timur, Jawa timnur" name="lokasi" value="{{$agen -> lokasi}}">
		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
		    <select class="form-control" id="exampleFormControlSelect1" name="gender"  value="{{$agen -> gender}}">
		      <option>Pilih Salah 1</option>
		      <option value="Laki-laki">Laki-laki</option>
		      <option value="Perempuan">Perempuan</option>
		      <option value="Belum Ditentukan">Belum Ditentukan</option>
		    </select>
		</div>
		<div class="form-group">
		    <label>Email</label>
		    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukan Email anda" name="email"  value="{{$agen -> email}}">
		</div>
		<div class="form-group">
		    <label>Dari Perusahaan</label>
		    <input type="text" class="form-control @error('perusahaan') is-invalid @enderror" placeholder="Dari Perusahaan mana" name="perusahaan" value="{{$agen -> perusahaan}}">
		</div> 
		<div class="col-lg-12">
		    <label>Foto Profile</label>
			<div class="col-6">
				<img src="{{ asset('image/agen/' . $agen->image) }}" style="width: 50%;" />
			</div>
		</div>
		<div class="form-group">
		    <label>Deskripsi Diri Anda</label>
		    <textarea type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">{{$agen -> keterangan}}</textarea>
		</div>
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
@endsection 